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
        'name',
        'roll_no',
        'email',
        'password',
        'batch',
        'degree',
        'department',
        'contact_no',
        'date_of_birth',
        'specialization',
        'current_job',
        'company_name',
        'industry',
        'experience',
        'skills',
        'linkedin_profile',
        'github_profile',
        'mentorship_availability',
        'area_of_interest',
        'webinars_participation',
        'current_city',
        'current_country',
        'profile_picture'
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public function coordinatedEvents()
    {
        return $this->hasMany(Event::class, 'coordinator_id');
    }

}
