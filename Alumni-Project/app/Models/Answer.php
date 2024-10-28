<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'question_id', 'user_id'];

    // Define the inverse of the one-to-many relationship
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
