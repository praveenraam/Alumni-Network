<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReports extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'alumni_id',
        'post_id',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
