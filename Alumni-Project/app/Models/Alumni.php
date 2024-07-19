<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\User as Authenticatable;

class Alumni extends Model
{
    protected $table = 'alumnis';

    protected $fillable = [
        'name','roll_no','email','password','batch','degree','department',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

}
