<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AlumniLoginApiController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'roll_no' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $credentials = $request->only('roll_no', 'password');

        if (Auth::guard('alumni')->attempt($credentials)) {
            $user = Auth::guard('alumni')->user();
        
            // Generate a new token for the authenticated alumni
            $token = $user->createToken('AlumniAuthToken')->plainTextToken;
        
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'user' => $user,
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function updatePassword(Request $request)
    {
        // Initialize an array to hold error messages
        $errors = [];

        // Validate the current password
        if (!$request->has('current_password') || empty($request->current_password)) {
            $errors['current_password'] = 'Current password is required.';
        }

        // Validate the new password
        if (!$request->has('new_password') || empty($request->new_password)) {
            $errors['new_password'] = 'New password is required.';
        } elseif (strlen($request->new_password) < 8) {
            $errors['new_password'] = 'New password must be at least 8 characters.';
        }

        // Ensure new password is different from the current password
        if ($request->new_password === $request->current_password) {
            $errors['new_password'] = 'New password must be different from the current password.';
        }

        // If there are any errors, return them
        if (!empty($errors)) {
            return response()->json(['errors' => $errors], 422);
        }

        // Retrieve the authenticated alumni
        $alumni = $request->user();

        // Check if the current password matches the existing password
        if (!Hash::check($request->current_password, $alumni->password)) {
            return response()->json(['error' => 'The current password is incorrect'], 422);
        }

        // Update the password
        $alumni->password = Hash::make($request->new_password);
        $alumni->save();

        return response()->json(['message' => 'Password changed successfully!'], 200);
    }

}
