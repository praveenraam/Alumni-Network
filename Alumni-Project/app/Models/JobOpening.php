<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    protected $fillable = [
        'title', 'description', 'company', 'location', 'application_deadline', 'posted_by', 'type','application_link'
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'posted_by');
    }
}
    
