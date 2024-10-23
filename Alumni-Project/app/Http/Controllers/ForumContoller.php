<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumContoller extends Controller
{
    //

    public function viewQuestions(){
        return view('forum.viewQuestion');
    }

    public function createQuestion(){
        return view('forum.addQuestion');
    }
}
