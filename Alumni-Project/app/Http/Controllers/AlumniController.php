<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Google\Service\Adsense\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PDO;

class AlumniController extends Controller
{
    public function AdminViewList(){
        $alumni = Alumni::all();
        return view('admin.alumni.view',compact('alumni'));
    }

    public function profile($id){
        $alumni = Alumni::find($id);  
        if($alumni == null) return redirect()->route('404');
        return view('alumni.profile',compact('alumni'));
    }

    public function settings($id){
        $alumni = Alumni::find($id); 
        if($alumni == null) return redirect()->route('404'); 
        return view('alumni.settings',compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        
        $ans = $request->validate([
            'name' => 'required|string|max:255',
            'roll_no' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'batch' => 'nullable|string|max:255',
            'degree' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'specialization' => 'nullable|string|max:255',
            'current_job' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'linkedin_profile' => 'nullable|string|max:255',
            'github_profile' => 'nullable|string|max:255',
            'mentorship_availability' => 'required|boolean',
            'area_of_interest' => 'nullable|string|max:255',
            'webinars_participation' => 'required|boolean',
            'current_city' => 'nullable|string|max:255',
            'current_country' => 'nullable|string|max:255',
        ]);
        $alumni = Alumni::findOrFail($id);
        $alumni->update($ans);

        return redirect()->route('alumni.index')->with('success', 'Alumni information updated successfully.');
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

    public function index(){
        return view('index');
    }

}
