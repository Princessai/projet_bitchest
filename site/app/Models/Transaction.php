<?php

namespace App\Models;

use App\Models\Crypto;
use App\Models\Wallet;
use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    /**
     *@var bool 
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crypto_id',
        'wallet_id',
        'cours_achat',
        'date',
        'quantite',
        'montant',
        'type',
        
    ];


    public function crypto(): BelongsTo
    {
        return $this->belongsTo(Crypto::class);
    }
    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
