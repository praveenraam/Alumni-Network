<?php

namespace App\Http\Controllers;
use App\Models\EventStudent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventStudentController extends Controller
{
    public function registerStudent(Request $request, $eventId)
    {
        $studentId = Session::get('user_id'); // Assuming the student ID is stored in the session

        if (!$studentId) {
            return redirect()->back()->withErrors('Student not logged in.');
        }

        $existingRegistration = EventStudent::where('student_id', $studentId)
            ->where('event_id', $eventId)
            ->first();

        if ($existingRegistration) {
            return redirect()->back()->withErrors('Student already registered for this event.');
        }

        // Create a new registration
        EventStudent::create([
            'student_id' => $studentId,
            'event_id' => $eventId,
        ]);

        return redirect()->route('student.events')->with('successMessage', 'Student registered successfully.');
    }

    public function showRegistrations($eventId)
    {
        // Get the event
        $event = Event::findOrFail($eventId);

        // Get the students registered for the event
        $registeredStudents = EventStudent::where('event_id', $eventId)
            ->with('student') // eager load student relationship
            ->get();

        return view('events.admin.register', compact('event', 'registeredStudents'));
    }
}
