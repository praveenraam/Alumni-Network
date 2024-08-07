<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'mentor_id',
    ];

    // Define the relationship with Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Define the relationship with Mentor (Alumni)
    public function mentor()
    {
        return $this->belongsTo(Alumni::class, 'mentor_id');
    }
}
