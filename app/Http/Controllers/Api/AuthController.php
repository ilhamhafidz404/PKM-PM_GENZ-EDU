<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        if($request->type == 1){
            $user = User::where("nisn", "=", $request->uname)->first();
            $user->type = "1";
        
            if ($user && Hash::check($request->password, $user->password)) {
                return response()->json([
                    "status" => "EDU-001",
                    "message" => "Berhasil login sebagai Siswa",
                    "data" => $user
                ]);
            }

            return response()->json([
                "status" => "EDU-002",
                "message" => "Akun Siswa tidak ditemukan",
                "data" => (object) []
            ]);
        } else if ($request->type == 2){
            $parent = Parents::where("email", "=", $request->uname)->first();
            $parent->type = "2";
        
            if ($parent && Hash::check($request->password, $parent->password)) {
                return response()->json([
                    "status" => "EDU-001",
                    "message" => "Berhasil login",
                    "data" => $parent
                ]);
            }

            return response()->json([
                "status" => "EDU-002",
                "message" => "Akun tidak ditemukan",
                "data" => (object) []
            ]);
        }

        return response()->json([
            "status" => "EDU-003",
            "message" => "Error, type tidak sesuai",
            "data" => (object) []
        ]);
    }
}
