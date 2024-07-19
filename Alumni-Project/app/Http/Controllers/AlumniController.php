<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PDO;

class AlumniController extends Controller
{
    public function index(){
        $alumni = Alumni::all();
        return view('admin.alumni.view',compact('alumni'));
    }
    public function create(){
        return view('admin.alumni.create');
    }

    public function store(Request $request){
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'roll_no' => 'required|string|max:255|unique:alumnis',
            'email' => 'required|string|email|max:255|unique:alumnis',
            'password' => 'required|string|min:8|confirmed',
            'batch' => 'required|string',
            'degree' => 'required|string',
            'department' => 'required|string',
        ]);

        // Create the Alumni record
        Alumni::create([
            'name' => $request->name,
            'roll_no' => $request->roll_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'batch' => $request->batch,
            'degree' => $request->degree,
            'department' => $request->department,
        ]);

        // Redirect with success message
        return redirect()->route('admin.alumni.create')->with('success', 'An Alumni was created successfully.');
    }
}
