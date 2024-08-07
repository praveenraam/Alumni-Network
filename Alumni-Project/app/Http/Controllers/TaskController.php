<?php

namespace App\Http\Controllers;

use App\Models\Task;
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

        return redirect()->route('tasks.create')->with('success', 'Task created successfully!');
    }
}
