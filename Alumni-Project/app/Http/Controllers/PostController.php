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
        $post->user_id = Auth::id(); // Set the user ID from the authenticated user
        $post->caption = $request->caption;

        if ($request->hasFile('photos')) {
            $photos = [];
            foreach ($request->file('photos') as $photo) {
                $photos[] = $photo->store('photos');
            }
            $post->photos = json_encode($photos);
        }

        if ($request->hasFile('videos')) {
            $videos = [];
            foreach ($request->file('videos') as $video) {
                $videos[] = $video->store('videos');
            }
            $post->videos = json_encode($videos);
        }

        $post->save();

        return redirect()->route('alumni.index')->with('success', 'Post created successfully.');
    }
}
    