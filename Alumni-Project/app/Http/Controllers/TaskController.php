<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Mentorship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Show the form for creating a new task.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'assigned_date' => 'required|date',
        ]);

        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'assigned_date' => $request->input('assigned_date'),
            'alumni_id' => Auth::id(), // Assuming the alumnus is authenticated
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function showStudentTasks()
    {
        $studentId = session('user_id');
        $mentorship = Mentorship::where('student_id', $studentId)->first();

        if (!$mentorship || !$mentorship->mentor_id) {
            return redirect()->route('available-mentors')->with('message', 'Please select a mentor to view tasks.');
        }

        // Order tasks by the latest created
        $tasks = Task::where('alumni_id', $mentorship->mentor_id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('tasks.view', compact('tasks'));
    }

    public function index() {
        // Fetch tasks created by the authenticated alumni
        $mentorId = auth()->user()->id; // Assuming the user is authenticated and is an alumni
        $tasks = Task::where('alumni_id', $mentorId)
                     ->orderBy('created_at', 'desc')
                     ->get();
    
        return view('tasks.index', compact('tasks'));
    }
    
    public function showAdminTasks()
    {
        $tasks = Task::with('alumni') // Eager load the alumni relationship
                    ->orderBy('created_at', 'desc') // Order tasks by latest created
                    ->get();

        return view('tasks.admin', compact('tasks'));
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'Task deleted successfully');
    }
}
