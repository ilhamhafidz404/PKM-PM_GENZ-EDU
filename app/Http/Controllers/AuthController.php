<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('spaces.index');
        }

        return view("auth.login");
    }

    public function validation(Request $request)
    {
        $user = User::where("nisn", "=", $request->nisn)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return redirect()->route('spaces.index');
        }

        return redirect()->back();
    }

    public function logout()
    {
        auth()->guard("teacher")->logout();
        auth()->logout();
        return redirect()->route('login');
    }

    //
    public function loginTeacher()
    {
        return view("auth.loginTeacher");
    }
    public function validationTeacher(Request $request)
    {
        $teacher = Teacher::where("email", "=", $request->email)->first();

        if (Hash::check($request->password, $teacher->password)) {
            auth()->guard("teacher")->login($teacher);

            return redirect()->route('spaces.index');
        }

        return redirect()->back();
    }
}
