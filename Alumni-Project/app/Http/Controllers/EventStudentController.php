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
        $studentId = Session::get('user_id');

        if (!$studentId) {
            return redirect()->back()->withErrors('Student not logged in.');
        }

        $existingRegistration = EventStudent::where('student_id', $studentId)
            ->where('event_id', $eventId)
            ->first();

        if ($existingRegistration) {
            return redirect()->back()->withErrors('Student already registered for this event.');
        }

        EventStudent::create([
            'student_id' => $studentId,
            'event_id' => $eventId,
        ]);

        return redirect()->route('student.events')->with('successMessage', 'Student registered successfully.');
    }

    public function showRegistrations($eventId)
    {
        $event = Event::findOrFail($eventId);

        $registeredStudents = EventStudent::where('event_id', $eventId)
            ->with('student')
            ->get();

        return view('events.admin.register', compact('event', 'registeredStudents'));
    }
}
