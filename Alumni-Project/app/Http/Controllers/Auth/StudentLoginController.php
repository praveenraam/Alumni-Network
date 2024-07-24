<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GoogleService;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    protected $google;

    public function __construct(GoogleService $google)
    {
        $this->google = $google;
    }

    public function redirectToGoogle()
    {
        return redirect()->away($this->google->getAuthUrl());
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = $this->google->getUser($request);

            if ($user) {
                $authUser = Student::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'google_id' => $user->id,
                        'avatar' => $user->picture, // Store the avatar URL
                    ]
                );

                Auth::guard('student')->login($authUser);

                return redirect()->route('student.index');
            }
        } catch (\Exception $e) {
            return redirect()->route('alumni.login')->withErrors(['login' => 'Unable to login with Google: ' . $e->getMessage()]);
        }

        return redirect()->route('alumni.login')->withErrors(['login' => 'Unable to login with Google.']);
    }
}
