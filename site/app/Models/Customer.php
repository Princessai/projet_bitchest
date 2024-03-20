<?php

namespace App\Models;

use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Customer extends Authenticatable
{
    use  HasFactory, Notifiable;
    protected $guard = 'customers';
    protected $table = 'customers';
   
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'email'
    ];

    protected $primaryKey = 'id';



    /**
     *@var bool 
     */
    public $timestamps = false;

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function isAdmin(){
        return false;
    }

}
