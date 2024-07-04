<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function index(Request $request)
    {
        $spaces = Space::with("user")->orderBy('id', 'DESC')->whereUserId($request->user_id)->paginate(5);

        if ($spaces->isNotEmpty()) {
            // Menambahkan prefix ke setiap elemen file
            $modifiedData = $spaces->map(function($item) {
                $item->file = "https://genzedu.id/storage/" . $item->file;
                return $item;
            });

            return response()->json([
                "status" => "EDU-001",
                "message" => "Berhasil get data spaces",
                "data" => $modifiedData,
                'current_page' => $spaces->currentPage(),
                'last_page' => $spaces->lastPage(),
                'per_page' => $spaces->perPage(),
                'total' => $spaces->total(),
            ]);
        }

        return response()->json([
            "status" => "EDU-002",
            "message" => "Space tidak ditemukan",
            "data" => (object) []
        ]);
    }
}
