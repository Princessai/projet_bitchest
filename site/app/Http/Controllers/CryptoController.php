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
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class CryptoController extends Controller
{
    //


    public function addcrypto() {
    
        return view('pages.admin.addCrypto');
       }
    
    public function courCrypto(Request $request, $crypto_id)
    {
        $cours = Cotation::select('cours_actuel', 'date')
            ->where("crypto_id", $crypto_id)
            ->orderBy('date')
            ->limit(30)
            ->get();

        $dates = [];
        $cours->transform(function ($item, $key) use (&$dates) {
            $dates[] = $item->date;
            return $item->cours_actuel;
        });

        $cours = json_encode($cours->all());
        $dates = json_encode($dates);

        $cryptoname = Crypto::findOrFail($crypto_id)->label;


        $view_data = ['crypto_id', 'cryptoname', 'cours', 'dates'];

        if (Gate::allows('do_transaction')) {

            $customer = Auth::user();
            $wallet_id = $customer->wallet_id;

            $solde = $customer->wallet->solde;
         
            $transactions = Transaction::where(["wallet_id" => $wallet_id, "crypto_id" => $crypto_id])->get();
            $view_data =  [...$view_data , ...['transactions', 'solde']];
            // dd($view_data);
        }
       

        return view('pages.courCrypto', compact(...$view_data));
    }


    public function listCrypto()
    {
        $cryptos = Crypto::all();
        return view('pages.marcheCrypto', compact('cryptos'));
    }

    public function transaction(Request $request, $crypto_id)
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

        // récupration des différents éléments pour créer une transaction
        $type = $request->type;
        $qte_transaction = $request->qte;
        $crypto_id = $request->crypto_id;
        $date = Carbon::now();
        // $guard = $request->session()->get('guard');
        // dd(Auth::user());
        $customer = Auth::user();
        $wallet = $customer->wallet;
        $solde_initial = $wallet->solde;
        $cours_achat = Cotation::getCoursActuel($crypto_id);
        // dd($cours_achat);
        $montant = $cours_achat * $qte_transaction;
        // var_dump($crypto_id);
        $crypto = $wallet->cryptos()->wherePivot('crypto_id', $crypto_id)->first();
        //  dd($wallet_crypto);
        if (is_null($crypto)) {
            $qte_initial = 0;
        } else {
            $qte_initial = $crypto->pivot->qte_crypto;
        }
        // dd($qte_initial);
        $validTransaction = true;

        if ($type == "sell") {

            if ($qte_initial < $qte_transaction) {
                $validTransaction = false;
                $error = "Vous ne possédez pas suffisamment de $crypto->label";
            } else {
                $qte_possede = $qte_initial - $qte_transaction;
                $solde_actuel = $solde_initial + $montant;
            }
        } else if ($type == "buy") {

            if ($solde_initial < $montant) {

                $validTransaction = false;
                $error = "Votre solde est insuffisant pour effectuer cette opération";
            } else {
                $solde_actuel = $solde_initial - $montant;
                $qte_possede = $qte_initial + $qte_transaction;
            }
        }

        if ($validTransaction == true) {


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

            return back()->with('success', "Transaction réussie ! Votre portefeuille a  été mis à jour");
        } else {

            return back()->withErrors(['transaction_error' => $error]) // Pass the error bag to the redirected page
                ->withInput();
        }
    }
}
