<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Post;
use App\Models\Mentorship;
use App\Models\User;
use Google\Service\Adsense\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use PDO;

class AlumniController extends Controller
{
    public function ViewList(){
        $alumni = Alumni::all();
        return view('admin.alumni.view',compact('alumni'));
    }
    public function ViewListStudent(){
        $alumni = Alumni::all();
        return view('student.viewAlumniList',compact('alumni'));
    }
    public function ViewListAlumni(){
        $alumni = Alumni::all();
        return view('alumni.viewList',compact('alumni'));
    }

    public function profile($id){
        $alumni = Alumni::find($id);  
        if($alumni == null) return redirect()->route('404');
        return view('alumni.profile',compact('alumni'));
    }

    public function settings(){

        $id = Session::get('user_id');

        if (!$id) {
            return redirect()->route('404')->withErrors(['error' => 'User ID not found in session.']);
        }

        $alumni = Alumni::find($id); 
        if($alumni == null) return redirect()->route('404'); 
        return view('alumni.settings',compact('alumni'));
    }

    public function ownProfile(){
        $userId = Session::get('user_id');

        if($userId){
            $alumni = Alumni::find($userId);
            if($alumni == null) return redirect()->route('404');
        }
        return view ('alumni.ownProfile',compact('alumni'));
    }

    public function update(Request $request)
    {
        $id = Session::get('user_id');
        if (!$id) {
            return redirect()->route('404')->withErrors(['error' => 'User ID not found in session.']);
        }

        $ans = $request->validate([
            'name' => 'string|max:255',
            'roll_no' => 'string|max:255',
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

        if ($request->hasFile('profile_pic')) {
            // Store the uploaded file
            $filePath = $request->file('profile_pic')->store('profile_pics', 'public');

            // Optionally delete the old profile picture from storage
            if ($alumni->profile_picture) {
                // You may need to adjust the path based on your storage structure
                Storage::delete('public/' . $alumni->profile_picture);
            }

            // Update the profile_picture column in the alumni table
            $alumni->profile_picture = $filePath;
        }

        // Update other alumni information
        $alumni->update($ans);

        if ($request->input('mentorship_availability') == 0) {
            $alumni->removeStudentsFromMentorship();
        }

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

    public function index()
    {
        $posts = Post::with('alumni')->orderBy('created_at', 'desc')->get();
        return view('alumni.index', compact('posts'));
    }
    public function deleteAlumni($id)
    {
        // dd($id);

        // Find the user by ID
        $user = Alumni::findOrFail($id);
        // Delete the user
        $user->delete();

        return redirect()->view('admin.alumni.view')->with('success', 'User account has been deleted successfully.');
    }

    public function availableMentors()
    {
        $availableMentors = Alumni::where('mentorship_availability', 1)->get();
        $studentId = Session::get('user_id'); // Get the student ID from the session
        $currentMentorship = Mentorship::where('student_id', $studentId)->first();

        return view('mentorships.available', compact('availableMentors', 'studentId', 'currentMentorship'));
    }
}
