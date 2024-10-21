<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    // Define the one-to-many relationship with answers
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
