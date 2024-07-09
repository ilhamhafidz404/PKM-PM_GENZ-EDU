<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function __invoke(Request $request)
    {
        $evaluation= Evaluation::whereUserId($request->user_id)->first();


        if($evaluation){
            return response()->json([
                "status" => "EDU-001",
                "message" => "Anak anda sudah di evaluasi",
                "data" => $evaluation,
            ]);
        }
        return response()->json([
            "status" => "EDU-002",
            "message" => "Anak anda belum di evaluasi",
            "data" => (object) [],
        ]);

    }
}
