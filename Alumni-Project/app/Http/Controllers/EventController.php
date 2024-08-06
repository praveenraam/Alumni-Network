<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Alumni;
use Carbon\Carbon; // Add this line to import Carbon
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



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
        return view('events.alumni.index', compact('events'));
    }

    public function listEventsForStudents()
    {
        // Get current date
        $today = Carbon::today();

        // Retrieve events with a coordinator, remove expired ones, and order by event_date
        $events = Event::with(['coordinator', 'registrations'])
                    ->whereNotNull('coordinator_id')
                    ->where('event_date', '>=', $today)
                    ->orderBy('event_date', 'asc')
                    ->get();

        return view('events.student.index', compact('events'));
    }


    public function setCoordinator(Request $req)
    {
        // Get the user ID from the session
        $id = Session::get('user_id');

        // Get the event ID from the request
        $eventId = $req->input('event_id');

        // Update the coordinator_id for the specific event in the database
        DB::table('events')
            ->where('id', $eventId)
            ->update(['coordinator_id' => $id]);

        // Define a success message in the session
        Session::flash('successMessage', 'Coordinator updated successfully');

        // Redirect to the AlumniIndex method
        return Redirect::action([EventController::class, 'AlumniIndex']);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

}
