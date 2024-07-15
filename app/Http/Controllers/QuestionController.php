<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'answers' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'quiz_id' => 'required',
        ]);

        for ($i=0; $i < count($request->answers); $i++) { 

            if (isset($request->answers[$i])) {
                $selectedAnswer = $request->answers[$i];
                switch ($selectedAnswer) {
                    case "a":
                        $answer = $request->a[$i];
                        break;
                    case "b":
                        $answer = $request->b[$i];
                        break;
                    case "c":
                        $answer = $request->c[$i];
                        break;
                    case "d":
                        $answer = $request->d[$i];
                        break;
                    default:
                        // Handle unexpected answer option
                        $answer = $request->d[$i];
                        break;
                }
            } else {
                $answer = "Answer not provided";
            }

            Question::create([
                "question" => $request->question[$i],
                "a" => $request->a[$i],
                "b" => $request->b[$i],
                "c" => $request->c[$i],
                "d" => $request->d[$i],
                "answer" => $answer,
                "quiz_id" => $request->quiz_id
            ]);
        }

        toast('Membuat Soal Berhasil','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
