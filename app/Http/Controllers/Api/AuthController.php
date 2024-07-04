<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $parent = Parents::where("email", "=", $request->email)->first();
        
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
}
