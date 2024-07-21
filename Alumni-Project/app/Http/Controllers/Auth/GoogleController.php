<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // dd('hello');
            $user = Socialite::driver('google')->user();
            // Check if the email domain matches your business domain
            if (!str_ends_with($user->email, '@bitsathy.ac.in')) {
                return redirect()->route('login')->withErrors(['email' => 'Unauthorized email domain']);
            }

            $existingUser = Student::where('email', $user->email)->first();

            if ($existingUser) {
                Auth::guard('student')->login($existingUser);
            } else {
                $newUser = Student::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                ]);
                Auth::guard('student')->login($newUser);
            }
            
            return redirect()->intended('/student/dashboard');
        } catch (\Exception $e) {
            return redirect()->intended('/login')->withErrors(['email' => 'Failed to authenticate using Google']);
        }
    }

}
