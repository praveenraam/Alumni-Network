<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
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
        $today = Carbon::today();

        $events = Event::with(['coordinator', 'registrations'])
                    ->whereNotNull('coordinator_id')
                    ->where('event_date', '>=', $today)
                    ->orderBy('event_date', 'asc')
                    ->get();

        return view('events.student.index', compact('events'));
    }


    public function setCoordinator(Request $req)
    {
        $id = Session::get('user_id');

        $eventId = $req->input('event_id');

        DB::table('events')
            ->where('id', $eventId)
            ->update(['coordinator_id' => $id]);

        Session::flash('successMessage', 'Coordinator updated successfully');

        return Redirect::action([EventController::class, 'AlumniIndex']);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

}
