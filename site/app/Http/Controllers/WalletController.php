<?php

namespace App\Http\Controllers;

use App\Models\Cotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function showInfoWallet(Request  $request) {
        $customer = Auth::user();
        $wallet = $customer->wallet;
        $solde_initial = $wallet->solde;
        // $cours_achat = Cotation::getCoursActuel($crypto_id);
        // dd($cours_achat);
        // var_dump($crypto_id);
        $cryptos_possede = $wallet->cryptos()->wherePivot('qte_crypto','>', 0)->get();
                // dd($cryptos_possede->pivot->qte_crypto);

        foreach ($cryptos_possede as $crypto) {
            $label = $crypto->label;
            $qte_crypto = $crypto->pivot->qte_crypto;
            $id = $crypto->id;
            // dump($label, $qte_crypto, $id);
            
            $transactionsCrypto = $wallet->transactions()->where('crypto_id',  $id)->get();
            $cout_total = 0;
            foreach($transactionsCrypto as $transaction){
                // dd($transaction->montant);
                $cout_total += $transaction->montant;
            }

            $valeur_achat = $cout_total / 
            dump($label, $qte_crypto, $id, $transactionsCrypto);

        }
        
        // dd($transactionsCrypto);


        return view('pages.customer.wallet');
    }
}
