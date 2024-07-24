<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 
        'email',
        'google_id',
        'avatar',
        'date_of_birth',
        'contact_number',
        'address',
        'roll_number',
        'batch',
        'degree',
        'department',
        'current_semester',
        'cgpa',
        'interests',
        'skills',
        'programming_languages',
        'linkedin_profile',
        'github_profile',
        'personal_website',
        'certifications',
        'internships_status',
        'internships_experience',
    ];
}
