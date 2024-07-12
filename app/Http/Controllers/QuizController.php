<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){

        $quizzes = Quiz::orderBy("id", "DESC")->get();

        return view("quiz.index", [
            "quizzes" => $quizzes
        ]);
    }
}
