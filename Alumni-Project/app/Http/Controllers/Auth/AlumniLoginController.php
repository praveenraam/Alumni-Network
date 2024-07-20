<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            return redirect()->intended('/alumni');
        }

        return redirect()->back()->withErrors(['roll_no' => 'Enter the username or password correctly']);
    }

    public function logout(){
        Auth::guard('alumni')->logout();
        return redirect()->route('alumni.login');
    }

}
