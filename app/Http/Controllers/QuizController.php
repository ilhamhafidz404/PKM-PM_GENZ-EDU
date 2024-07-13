<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    public function index(){

        $quizzes = Quiz::orderBy("id", "DESC")->get();

        return view("quiz.index", [
            "quizzes" => $quizzes
        ]);
    }
    public function create(){
        return view("quiz.create");
    }
    public function store(Request $request){
        Quiz::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request->description,
            "category" => $request->category
        ]);

        return redirect()->route("quizzes.index");
    }
}
