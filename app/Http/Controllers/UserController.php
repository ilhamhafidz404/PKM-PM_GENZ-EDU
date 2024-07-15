<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {

        $users = User::orderBy("id", "DESC")->get();

        return view('user.index', [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'student' => 'required',
            'nisn' => 'required',
            'password' => 'required',
            'profile' => 'required',
            'parent' => 'required',
        ]);

        $user = User::create([
            "name" => $request->student,
            "nisn" => $request->nisn,
            "password" => Hash::make($request->password),
            "profile" => "test.jpg",
        ]);

        Parents::create([
            "name" => $request->parent,
            "username" => Str::slug($request->parent),
            "email" => Str::slug($request->parent) . "@gmail.com",
            "password" => Hash::make($request->password),
            "user_id" => $user->id
        ]);

        toast('Menambah User Berhasil','success');
        return redirect()->route("users.index");
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
