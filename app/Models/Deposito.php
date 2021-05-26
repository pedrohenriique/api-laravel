<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $fillable = [
        'user_id',
        'valor'
    ];

    public $timestamps = true;

    public function User()
    {
        $this->hasOne(User::class,'id','user_id');
    }
}
