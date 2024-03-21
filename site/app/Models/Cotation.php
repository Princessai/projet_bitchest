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
    protected $fillable = [
        'crypto_id',
        'date',
        'cours_actuel',
    ];

    public function cryptos() : BelongsTo 
    {
        return $this->belongsTo(Crypto::class);

    }

    
}
