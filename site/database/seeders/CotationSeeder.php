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
        // var_dump($startOfDay);
        $startOfDay = $startOfDay->subDays(30);
        var_dump($startOfDay);

        $prev_cotations = [];
        $timestamp = $startOfDay->timestamp;

       


        for ($day = 0; $day <= 30; $day++) {

            if ($day !== 0) {
                
                $startOfDay->addDay();
                $timestamp = $startOfDay->timestamp;
            }



            foreach ($cryptos as $crypto) {

                if($day == 0){
                  
                    $cours_actuel =getFirstCotation($crypto);
                    
                    
                }else{
                    $prev_cotation = $prev_cotations[$crypto->label];
                    $variation_percentage = getCotationFor($crypto);
                    $variation_value = ($prev_cotation * $variation_percentage) /100;

                    $cours_actuel= $prev_cotation + $variation_value;
                    
                }
                $prev_cotations[$crypto->label] = $cours_actuel;                // var_dump($crypto);
                // $crypto_id = Crypto::select('id')->where('label', $crypto)->first()->id;
                
                // var_dump($cours_actuel);

                Cotation::insert(['cours_actuel'=>$cours_actuel, 'crypto_id'=> $crypto->id, 'date'=>$startOfDay ]);

            };
        }
    }
}
