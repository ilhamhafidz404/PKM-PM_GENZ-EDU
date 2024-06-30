<?php

namespace App\Http\Controllers;

use App\Models\{Parents,Teacher,User};
use Illuminate\Support\Facades\{Auth,Hash};
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

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

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            toast('Login Berhasil','success');
            return redirect()->route('spaces.index');
        }

        Alert::error('Gagal Login', 'Data yang anda masukkan salah!');
        return redirect()->back();
    }

    public function logout()
    {
        auth()->guard("teacher")->logout();
        auth()->guard("parent")->logout();
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

        if ($teacher && Hash::check($request->password, $teacher->password)) {
            auth()->guard("teacher")->login($teacher);

            toast('Login Berhasil','success');
            return redirect()->route('spaces.index');
        }

        Alert::error('Gagal Login', 'Data yang anda masukkan salah!');
        return redirect()->back();
    }

    //
    public function loginParent()
    {
        return view("auth.loginParent");
    }
    public function validationParent(Request $request)
    {
        $parent = Parents::where("email", "=", $request->email)->first();

        if ($parent && Hash::check($request->password, $parent->password)) {
            auth()->guard("parent")->login($parent);

            toast('Login Berhasil','success');
            return redirect()->route('spaces.index');
        }

        Alert::error('Gagal Login', 'Data yang anda masukkan salah!');
        return redirect()->back();
    }
}
