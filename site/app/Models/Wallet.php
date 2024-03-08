<?php

namespace App\Models;

use App\Models\Crypto;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Wallet extends Model
{
    use HasFactory;

        /**
     *@var bool 
     */
    public $timestamps = false;

    public function customer() : BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function crypto(): BelongsToMany
    {
        return $this->belongsToMany(Crypto::class);
    }


}
