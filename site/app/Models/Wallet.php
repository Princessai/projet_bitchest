<?php

namespace App\Models;

use App\Models\Crypto;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wallet extends Model
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
        'solde',
    ];


    public function customer() : HasOne {
        return $this->hasOne(Customer::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);

    }
    public function cryptos(): BelongsToMany
    {
        return $this->belongsToMany(Crypto::class)->withPivot('qte_crypto');

    }


}
