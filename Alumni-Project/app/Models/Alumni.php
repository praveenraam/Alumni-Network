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

    public function mentorships()
    {
        return $this->hasMany(Mentorship::class, 'mentor_id');
    }

    // If Alumni is a mentor, they can have multiple mentees
    public function mentees()
    {
        return $this->hasMany(Mentorship::class, 'mentor_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'alumni_id');
    }

    public function forgotPasswordRequests()
    {
        return $this->hasMany(ForgotPasswordRequest::class, 'roll_no', 'roll_number');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
}

