<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class AdminLoginController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('auth.admin_auth');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin');
        }

        return redirect()->back()->withErrors(['username' => 'Enter the username or password correctly']);
    }

    public function index()
    {
        $posts = Post::with('alumni')->orderBy('created_at', 'desc')->get();
        return view('admin.index', compact('posts'));
    }
}
