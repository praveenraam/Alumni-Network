<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the user

        $request->session()->invalidate(); // Clears the session

        $request->session()->regenerateToken(); // Regenerates the CSRF token

        return redirect('/login'); // Redirects to the login page
    }
}
