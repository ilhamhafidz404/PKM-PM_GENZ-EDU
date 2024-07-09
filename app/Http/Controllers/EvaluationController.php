<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view("evaluation.index", [
            "users" => $users
        ]);
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
        Evaluation::create([
            "user_id" => $request->user_id,
            "gotong_royong" => $request->gotong_royong,
            "religius" => $request->religius,
            "nasionalis" => $request->nasionalis,
            "mandiri" => $request->mandiri,
            "integritas" => $request->integritas,
            "message" => $request->message,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation= Evaluation::whereUserId($id)->first();

        return view("evaluation.show", [
            "evaluation" => $evaluation,
            "user_id" => $id
        ]);
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
