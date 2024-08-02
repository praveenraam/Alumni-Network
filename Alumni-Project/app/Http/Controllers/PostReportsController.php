<?php
namespace App\Http\Controllers;

use App\Models\PostReports;
use App\Models\Student;
use App\Models\Alumni;
use Illuminate\Http\Request;

class PostReportsController extends Controller
{
    // Method to handle report by student
    public function reportByStudent($postID, $studentID)
    {
        // Validate that the student and post exist
        $student = Student::findOrFail($studentID);

        PostReports::create([
            'student_id' => $student->id,
            'post_id' => $postID,
        ]);

        return redirect()->back()->with('success', 'Report submitted successfully.');
    }

    // Method to handle report by alumni
    public function reportByAlumni($postID, $alumniID)
    {
        // Validate that the alumni and post exist
        $alumni = Alumni::findOrFail($alumniID);

        PostReports::create([
            'alumni_id' => $alumni->id,
            'post_id' => $postID,
        ]);

        return redirect()->back()->with('success', 'Report submitted successfully.');
    }

    public function indexForAdmin()
    {
        $postReports = PostReports::with(['student', 'alumni', 'post'])->get();
        return view('admin.reports.post', compact('postReports'));
    }
}
