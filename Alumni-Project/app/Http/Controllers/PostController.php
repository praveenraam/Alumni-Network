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
            $photo1 = [];
            foreach ($request->file('photo1') as $photo) {
                $photo1[] = $photo->store('photo1', 'public');
            }
            $post->photo1 = json_encode($photo1);
        }
        

        if ($request->hasFile('photo2')) {
            $photo2 = [];
            foreach ($request->file('photo2') as $video) {
                $photo2[] = $video->store('photo2');
            }
            $post->photo2 = json_encode($photo2);
        }

        $post->save();

        return redirect()->route('alumni.index')->with('success', 'Post created successfully.');
    }
}
    