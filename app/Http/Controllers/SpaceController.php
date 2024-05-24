<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpaceController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        if (auth()->guard("parent")->user()) {
            $spaces = Space::with("user")->orderBy('id', 'DESC')->whereUserId(auth()->guard("parent")->user()->user_id)->paginate(5);
        } else {
            $spaces = Space::with("user")->orderBy('id', 'DESC')->paginate(5);
        }


        return view("space.index", [
            "spaces" => $spaces
        ]);
    }

    public function create()
    {
        return view("space.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $path = $file->store('spaces', 'public');

        Space::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request->description,
            "file" => $path,
            "user_id" => Auth::user()->id,
        ]);

        return redirect()->route('spaces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Space $s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Space $s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Space $s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Space $s)
    {
        //
    }
}
