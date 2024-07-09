<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Absent;
use Illuminate\Http\Request;

class AbsentController extends Controller
{
    public function index(Request $request){
        $checkTodayAbsent = Absent::whereDate('created_at', date('Y-m-d'))->whereUserId($request->user_id)->with("user")->first();

        if($checkTodayAbsent){

            // Menambahkan prefix ke setiap elemen file
            $checkTodayAbsent->photo = "https://genzedu.id/storage/".$checkTodayAbsent->photo;

            return response()->json([
                "status" => "EDU-001",
                "message" => "Anak anda sudah absen",
                "data" => $checkTodayAbsent,
            ]);
        }

        return response()->json([
            "status" => "EDU-002",
            "message" => "Anak anda belum absen",
            "data" => (object) [],
        ]);
    }
}
