<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForgotPasswordRequest;
use App\Models\Alumni;

class ForgotPasswordController extends Controller
{
    public function create()
    {
        return view('auth.forgotpassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rollnumber' => 'required|string|max:255',
        ]);

        ForgotPasswordRequest::create([
            'name' => $request->name,
            'roll_number' => $request->rollnumber,
        ]);

        return redirect()->route('alumni.login')->with('success', 'Your request has been submitted.');
    }

    public function index()
    {
        // Retrieve all unresolved forgot-password requests
        $requests = ForgotPasswordRequest::where('is_resolved', 0)
                    ->with('alumni') // Assuming you have a relationship defined
                    ->get();
        return view('admin.alumni.resetPass', compact('requests'));
    }

    public function ignoreRequest($id)
    {
        // Find the forgot password request by ID
        $forgotPasswordRequest = ForgotPasswordRequest::findOrFail($id);

        // Mark the request as resolved
        $forgotPasswordRequest->is_resolved = 1;
        $forgotPasswordRequest->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Request ignored and marked as resolved.');
    }

    public function changePassword(Request $request, $roll_number)
    {
        $request->validate([
            'new_password' => 'required|string|min:8',
        ]);

        // Find the alumnus by roll number
        $alumni = Alumni::where('roll_no', $roll_number)->firstOrFail();

        // Update the password
        $alumni->password = bcrypt($request->new_password);
        $alumni->save();

        // Mark the forgot password request as resolved
        $forgotPasswordRequest = ForgotPasswordRequest::where('roll_number', $roll_number)->firstOrFail();
        $forgotPasswordRequest->is_resolved = 1;
        $forgotPasswordRequest->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Password changed and request marked as resolved.');
    }



}
