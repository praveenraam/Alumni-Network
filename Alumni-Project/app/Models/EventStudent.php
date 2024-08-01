<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStudent extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'event_id'];

    // Explicitly define the table name
    protected $table = 'event_student';

    // Relationship to Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Relationship to Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
