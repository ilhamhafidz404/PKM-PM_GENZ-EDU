<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
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

    public function show($slug){
        $quiz = Quiz::whereSlug($slug)->first();
        $questions = Question::whereQuizId($quiz->id)->get();

        if(isset(auth()->user()->id)){
            $answers = Answer::where('user_id', auth()->user()->id)
                ->whereHas('question', function ($query) use ($quiz) {
                    $query->where('quiz_id', $quiz->id);
                })
                ->with(['question' => function ($query) use ($quiz) {
                    $query->where('quiz_id', $quiz->id);
                }])
                ->get();
            
            if(count($answers)){
                return view("quiz.show", [
                    "quiz" => $quiz,
                    "questions" => $questions,
                    "answers" => $answers,
                    "userHasAnswer" => true,
                ]);
            } else{
                return view("quiz.show", [
                    "quiz" => $quiz,
                    "questions" => $questions,
                    "answers" => $answers,
                    "userHasAnswer" => false,
                ]);
            }
        } else{
            return view("quiz.show", [
                "quiz" => $quiz,
                "questions" => $questions
            ]);
        }
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
