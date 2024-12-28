<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumni;

class AuthenticateWithToken
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the token is provided
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Token not provided'], 401);
        }

        // You can replace this logic with your token validation process
        $alumni = Alumni::where('api_token', $token)->first();

        if (!$alumni) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Log the user in
        Auth::login($alumni);

        return $next($request);
    }
}
