<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'nullable|string|max:255',
            'photos.*' => 'nullable|file|mimes:jpg,png,jpeg',
            'videos.*' => 'nullable|file|mimes:mp4,mov,avi',
        ]);
        
        $post = new Post();
        $post->user_id = Auth::id(); 
        $post->caption = $request->caption;
        // dd($request);
        if ($request->hasFile('photo1')) {
            $photo1 = $request->file('photo1')->store('photo1', 'public');
            $post->photo1 = $photo1;
        }
        
        if ($request->hasFile('photo2')) {
            $photo2 = $request->file('photo2')->store('photo2', 'public');
            $post->photo2 = $photo2;
        }        

        $post->save();

        return redirect()->route('alumni.index')->with('success', 'Post created successfully.');
    }
}
    