<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'caption',
        'photo1',
        'photo2',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'photos' => 'array',
        'videos' => 'array',
    ];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the path for the photos.
     *
     * @return string
     */
    public function getPhotosPathAttribute()
    {
        return json_decode($this->photo, true);
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'user_id');
    }

}
