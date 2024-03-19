<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Crypto;
use App\Models\Wallet;
use App\Models\Cotation;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class CryptoController extends Controller
{
    //

    public function courCrypto(Request $request, $crypto_id)
    {
        //dd($crypto_id);
        $cours = Cotation::select('cours_actuel', 'date')
            ->where("crypto_id", $crypto_id)
            ->orderBy('date')
            ->get();

        $dates = [];
        $cours->transform(function ($item, $key) use (&$dates) {
            // var_dump($item->cours_actuel);
            $dates[] = $item->date;
            return $item->cours_actuel;
        });

        $cours = json_encode($cours->all());
        $dates = json_encode($dates);

        $cryptoname = Crypto::findOrFail($crypto_id)->label;
        // $cryptoname = $cryptoname->label;

        // $customer = Customer::find($request->session()->get('user')['user_id']);
        $guard = "customers";

        if ($request->session()->get('isadmin')) {
            $guard = "admins";
        }

        $customer = Auth::guard($guard)->user();
        // dd($customer);
        $wallet_id = $customer->wallet_id;

        $solde = $customer->wallet->solde;
        // dd($solde);

        $transactions = Transaction::where(["wallet_id" => $wallet_id, "crypto_id" => $crypto_id])->get();
        // dd($transactions);

        return view('pages.courCrypto', compact('crypto_id', 'cours', 'dates', 'cryptoname', 'transactions', 'solde'));
    }


    public function listCrypto()
    {
        $cryptos = Crypto::all();
        return view('pages.admin.AdminMarcheCrypto', compact('cryptos'));
    }





    public function walletCrypto()
    {
        $cryptos = Crypto::all();
        return view('pages.customer.wallet', compact('cryptos'));
    }



    public function transaction(Request $request)
    {
        // Validation des champs

        $validated = Validator::make($request->all(), [
            'qte' => 'required|numeric|gt:0',
            'type' => 'required|in:buy,sell',
        ]);
        $validated->setAttributeNames([
            'qte' => "quantity",
        ]);

        if ($validated->fails()) {
            // Validation failed
            return back()
                ->withErrors($validated) // Pass validation errors to the view
                ->withInput(); // Pass input data back to the form
        }

        require(base_path('documents/utils.php'));
        // récupration des différents éléments pour créer une transaction
        $type = $request->type;
        $qte_transaction = $request->qte;
        $crypto_id = $request->crypto_id;
        $date = Carbon::now();
        $customer_id = $request->session()->get('user')['user_id'];
        $wallet = Customer::find($customer_id)->wallet;
        $solde_initial = $wallet->solde;
        $cours_achat = getCoursActuel($crypto_id);
        $montant = $cours_achat * $qte_transaction;
        // var_dump($crypto_id);
        $crypto = $wallet->cryptos()->wherePivot('crypto_id', $crypto_id)->first();
        //  dd($wallet_crypto);
        if (is_null($crypto)) {
            $qte_initial = 0;
        } else {
            $qte_initial = $crypto->pivot->qte_crypto;
        }

        $validTransaction = true;

        if ($type == "sell") {

            if ($qte_initial < $qte_transaction) {
                $validTransaction = false;
                $error = "Vous ne possédez pas suffisamment de $crypto->label";
            } else {
                $qte_possede = $qte_initial - $qte_transaction;
                $solde_actuel = $solde_initial - $montant;
            }
        } else if ($type == "buy") {

            if ($solde_initial < $montant) {

                $validTransaction = false;
                $error = "Votre solde est insuffisant pour effectuer cette opération";
            } else {
                $solde_actuel = $solde_initial + $montant;
                $qte_possede = $qte_initial + $qte_transaction;
            }
        }

        if ($validTransaction == true && $qte_transaction > 0) {


            if (($type == 'sell' || $type = 'buy') && $qte_initial > 0) {

                $wallet->cryptos()->updateExistingPivot($crypto_id, [
                    'qte_crypto' => $qte_possede
                ]);
            }

            if ($type == 'buy' && $qte_initial == 0) {
                $wallet->cryptos()->attach($crypto_id, ['qte_crypto' => $qte_transaction]);
            }

            // dd($wallet_id);

            $transactions = Transaction::create(["crypto_id" => $crypto_id, "wallet_id" => $wallet->id, "cours_achat" => $cours_achat, "date" => $date, "type" => $type, 'quantite' => $qte_transaction, "montant" => $montant]);
            // dd($solde_actuel);
            $wallet->update(['solde' => $solde_actuel]);
        } else {

            return back()->withErrors(['transaction_error' => $error]) // Pass the error bag to the redirected page
                ->withInput();
        }
    }
}
