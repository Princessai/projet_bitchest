<?php

namespace Database\Seeders;

use Exception;
use App\Models\Crypto;
use Illuminate\Support\Str;
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

        $cryptos = Config::get('data.cryptos');

        foreach ($cryptos as $key => $crypto) {
            // dump(public_path('storage\img\\' . Str::snake(str::lower($crypto)) . '.png'));
            $filename= Str::snake(str::lower($crypto)) . '.png';
            dump(file_exists(public_path('storage\img\\' .$filename)));
            $img = public_path('storage\img\\' .$filename);

            if (!file_exists($img)) {

                throw new Exception('file not found.');
            }
    

            $cryptos[$key] = ['label' => $crypto, 'image' =>  $filename];
        }

        Crypto::insert($cryptos);
    }
}
