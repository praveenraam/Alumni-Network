<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'assigned_date',
        'alumni_id',
    ];

    public function alumnus()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
