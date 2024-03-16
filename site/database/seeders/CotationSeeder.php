<?php

namespace Database\Seeders;

require base_path('/documents/cotation_generator.php');

use Carbon\Carbon;
use App\Models\Crypto;
use App\Models\Cotation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        function positiveCotation($func, $crypto) {
            $cotation= $func($crypto);
            while ($cotation < 0) {
                
               $cotation= $func($crypto);
            }
            return $cotation;
        }

        $cryptos =Crypto::all();



        // Get the timestamp of the start of the day
        $startOfDay = Carbon::today();
        $timestamp = $startOfDay->timestamp;
       


        for ($day = 1; $day <= 30; $day++) {

            if ($day !== 1) {
                
                $startOfDay->subDays(1);
                $timestamp = $startOfDay->timestamp;
            }



            foreach ($cryptos as $crypto) {

                if($day == 30){
                  
                    $cours_actuel =positiveCotation("getFirstCotation",$crypto->label );
                    
                }else{
                    $cours_actuel=positiveCotation("getCotationFor",$crypto->label);
                    
                }
                // var_dump($crypto);
                // $crypto_id = Crypto::select('id')->where('label', $crypto)->first()->id;
                
                // var_dump($cours_actuel);

                Cotation::insert(['cours_actuel'=>$cours_actuel, 'crypto_id'=> $crypto->id, 'date'=>$startOfDay ]);

            };
        }
    }
}
