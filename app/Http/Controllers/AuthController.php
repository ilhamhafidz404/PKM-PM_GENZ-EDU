<?php

namespace App\Http\Controllers;

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
        auth()->logout();
        return redirect()->route('login');
    }
}
