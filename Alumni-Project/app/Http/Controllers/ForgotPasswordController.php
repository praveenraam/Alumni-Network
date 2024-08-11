<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForgotPasswordRequest;

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
}
