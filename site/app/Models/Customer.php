<?php

namespace App\Models;

use App\Models\Crypto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

        /**
     *@var bool 
     */
    public $timestamps = false;

    public function crypto() : HasMany {
        return $this->hasMany(Crypto::class);

    }

    public function wallet() : HasOne {
        return $this->hasOne(Wallet::class);
    }

}
