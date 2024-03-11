<?php

namespace App\Models;

use App\Models\Wallet;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Crypto extends Model
{
    use HasFactory;

        /**
     *@var bool 
     */
    public $timestamps = false;

    public function wallet(): BelongsToMany
    {
        return $this->belongsToMany(Wallet::class);
    }

}
