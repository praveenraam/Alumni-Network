<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Alumni;
use Carbon\Carbon; // Add this line to import Carbon


class EventController extends Controller
{
    public function create()
    {
        return view('events.admin.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->event_date = $request->input('event_date');
        $event->save();

        return redirect()->route('admin.events.index');
    }

    public function AdminIndex()
    {
        $today = Carbon::today();
        $events = Event::with('coordinator')->where('event_date', '>=', $today)->orderBy('event_date', 'asc')->get();
        return view('events.admin.index', compact('events'));
    }
    public function AlumniIndex(){
        $today = Carbon::today();
        $events = Event::with('coordinator')->where('event_date', '>=', $today)->orderBy('event_date', 'asc')->get();
        return view('events.admin.index', compact('events'));
    }

    public function listEventsForStudents()
    {
        // Get current date
        $today = Carbon::today();

        // Retrieve events with a coordinator, remove expired ones, and order by event_date
        $events = Event::whereNotNull('coordinator_id')
                       ->where('event_date', '>=', $today)
                       ->orderBy('event_date', 'asc')
                       ->get();

        return view('events.student.index', compact('events'));
    }

}
