<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use App\Models\Cotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function showInfoWallet(Request  $request) {
        $customer = Auth::user();
        $wallet = $customer->wallet;
        $solde_initial = $wallet->solde;
        // $cours_achat = Cotation::getCoursActuel();
        // dd($solde_initial);
        // var_dump($crypto_id);
        $isWalletEmpty = false;
        $cryptos_possede = $wallet->cryptos()->wherePivot('qte_crypto','>', 0)->get();

        if ($cryptos_possede->count()<= 0) {
            $isWalletEmpty = true;
        }
        // dd($cryptos_possede->count());
        $cryptosInfos = [];
        $couts_totaux = 0;
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
            $couts_totaux += $cout_total;
            
            $valeur_achat = $cout_total / $qte_crypto;
            $cours_actuel = Crypto::getCoursActuel($id);
            $vt_cours_actuel = $cours_actuel * $qte_crypto;
            $plusValue = $vt_cours_actuel - $valeur_achat;

            $cryptosInfos[] = compact('valeur_achat', 'cout_total', 'plusValue', 'qte_crypto', 'id', 'label');
            // dd($valeur_achat, $cours_actuel, $vt_cours_actuel, $plusValue);
        }
        
        // dd($cryptoInfo);


        return view('pages.customer.wallet', compact('cryptosInfos', 'isWalletEmpty', 'customer', 'couts_totaux'));
    }
}
