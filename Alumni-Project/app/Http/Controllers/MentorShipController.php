<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentorship;

class MentorshipController extends Controller
{
    public function assign(Request $request)
    {
        $studentId = $request->input('student_id');
        $mentorId = $request->input('mentor_id');

        // Update or create the mentorship record
        Mentorship::updateOrCreate(
            ['student_id' => $studentId],
            ['mentor_id' => $mentorId]
        );

        return redirect()->route('student.tasks')->with('success', 'Mentor assigned successfully.');
    }
}
