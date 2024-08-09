<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AlumniLoginController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'roll_no' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('roll_no','password');

        if(Auth::guard('alumni')->attempt($credentials)){

            $user = Auth::guard('alumni')->user();
        
            // Store the user ID in the session
            Session::put('user_id', $user->id);

            return redirect()->intended('/alumni');
        }

        return redirect()->back()->withErrors(['roll_no' => 'Enter the username or password correctly']);
    }

    public function logout(){
        Auth::guard('alumni')->logout();
        return redirect()->route('alumni.login');
    }

    public function index()
    {
        return view('index'); // Ensure this view exists
    }

    public function showChangePasswordForm()
    {
        return view('alumni.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $alumni = Auth::guard('alumni')->user();

        if (!Hash::check($request->current_password, $alumni->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        $alumni->password = Hash::make($request->new_password);
        $alumni->save();

        return redirect()->route('alumni.change-password.form')->with('status', 'Password changed successfully!');
    }

}
