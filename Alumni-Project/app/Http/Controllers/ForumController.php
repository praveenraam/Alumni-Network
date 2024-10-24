<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //

    public function viewQuestions(){

        $questions = Question::all();
        
        return view('forum.viewQuestion',compact('questions'));
    }

    public function viewAnswers(){
        return view('forum.viewAnswers');
    }

    public function createQuestion(){
        return view('forum.addQuestion');
    }

    public function storeQuestion(Request $request)
    {   
        // dump($request);

        $id = Session::get('user_id');

        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);

        $question = new Question();
        $question->title = $validatedData['title'];
        $question->body = $validatedData['body'];
        
        $question->student_id = $id;

        $question->save();

        // Redirect to the forum index page with a success message
        return redirect()->route('forum.index')->with('success', 'Question added successfully.');
    }


}
