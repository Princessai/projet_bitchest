<?php

namespace Database\Seeders;

use App\Models\Crypto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $cryptos =Config::get('data.cryptos');

        foreach($cryptos as $key=>$crypto){

            $cryptos[$key]=['label'=>$crypto];

        }

        Crypto::insert($cryptos);
    }
}
