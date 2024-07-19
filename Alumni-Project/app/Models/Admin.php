<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins_auth';

    protected $fillable = [
        'email', 'username', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
