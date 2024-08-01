<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'event_date', 'coordinator_id'];

    /**
     * Get the coordinator for the event.
     */
    public function coordinator()
    {
        return $this->belongsTo(Alumni::class, 'coordinator_id');
    }

    /**
     * Get the registrations for the event.
     */
    public function registrations()
    {
        return $this->hasMany(EventStudent::class);
    }
}
