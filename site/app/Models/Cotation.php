<?php

namespace App\Models;

use App\Models\Crypto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cotation extends Model
{
    use HasFactory;

            /**
     *@var bool 
     */
    public $timestamps = false;
    protected $fillable = [];

    public function cryptos() : BelongsTo 
    {
        return $this->belongsTo(Crypto::class);

    }

    public static function getCoursActuel($cryptoId)
    {
    
        return Crypto::find($cryptoId)->cotations()->latest( 'date' )->first()->cours_actuel;
        
        // return static::where('crypto_id', $cryptoId)
        //     ->orderBy('date', 'desc')->first()->cours_actuel;
    }
    
}
