<?php

namespace App\Models;

use App\Models\Wallet;
use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function account() : HasOne {
        return $this->hasOne(Account::class);
    }

}
