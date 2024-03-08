<?php

namespace App\Models;

use App\Models\Crypto;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

        /**
     *@var bool 
     */
    public $timestamps = false;

    public function wallet() : HasOne {
        return $this->hasOne(Wallet::class);
    }

    public function crypto(): BelongsToMany
    {
        return $this->belongsToMany(Crypto::class);
    }

}
