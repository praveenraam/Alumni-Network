<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpening;

class JobOpeningController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'application_deadline' => 'required|date',
            'type' => 'required|boolean', // Validate the type field
            'application_link' => 'required|string',   
        ]);

        JobOpening::create([
            'title' => $request->title,
            'description' => $request->description,
            'company' => $request->company,
            'location' => $request->location,
            'application_deadline' => $request->application_deadline,
            'posted_by' => auth()->id(),
            'type' => $request->type,
            'application_link' => $request->application_link,
        ]);

        return redirect()->route('jobOpenings.index')->with('success', 'Job opening created successfully.');
    }
    public function viewJobs(){
        $jobOpenings = JobOpening::with('alumni')->where('application_deadline', '>=', now())->orderBy('application_deadline', 'asc')->get();
        return view('jobs.index',compact('jobOpenings'));
    }
    public function create(){
        return view('jobs.create');
    }

}