<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Google\Service\Adsense\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PDO;


class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function settings($id){
        $student = Student::find($id); 
        if($student == null) return redirect()->route('404'); 
        return view('student.settings',compact('student'));
    }

    
public function update(Request $request, $id)
{
    // Validate the request data
    $res = $request->validate([
        'name' => 'required|string|max:255',
        'roll_number' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'contact_number' => 'nullable|string|max:20',
        'date_of_birth' => 'nullable|date',
        'address' => 'nullable|string|max:255',
        'batch' => 'nullable|string|max:255',
        'degree' => 'nullable|string|max:255',
        'department' => 'nullable|string|max:255',
        'current_semester' => 'nullable|string|max:255',
        'cgpa' => 'nullable|numeric|between:0,10', // Adjust range based on CGPA scale
        'interests' => 'nullable|string|max:255',
        'skills' => 'nullable|string|max:255',
        'programming_languages' => 'nullable|string|max:255',
        'linkedin_profile' => 'nullable|url|max:255',
        'github_profile' => 'nullable|url|max:255',
        'personal_website' => 'nullable|url|max:255',
        'certifications' => 'nullable|string|max:255',
        'internships_status' => 'nullable|string|max:255',
        'internships_experience' => 'nullable|string|max:255',
    ]);

    // Find the student by ID or fail if not found
    $student = Student::findOrFail($id);

    // Update the student record with validated data
    $student->update($res);

    // Redirect back to the student index or other appropriate page with a success message
    return redirect()->route('student.index')->with('success', 'Student information updated successfully.');
}

}
