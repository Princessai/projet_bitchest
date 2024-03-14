<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    /**
     *@var bool 
     */
    public $timestamps = false;

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);

    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);

    }

}
