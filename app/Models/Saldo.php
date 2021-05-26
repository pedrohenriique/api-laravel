<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $fillable = [
        'user_id',
        'saldo'
    ];

    public function User()
    {
        $this->hasOne(User::class,'id','user_id');
    }
}
