<?php

namespace App\Models;

use App\Models\Cotation;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Crypto extends Model
{
    use HasFactory;

    /**
     *@var bool 
     */

    public $timestamps = false;

    public function cotations(): HasMany
    {
        return $this->hasMany(Cotation::class);
    }
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function wallets(): BelongsToMany
    {
        return $this->belongsToMany(Wallet::class)->withPivot('qte_crypto');
    }
}
