<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni extends Authenticatable
{
    protected $table = 'alumnis';

    protected $fillable = [
        'name','roll_no','email','password','batch','degree','department',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

}
