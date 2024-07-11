<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __invoke()
    {
        $modules = Module::paginate(5);
        
        if($modules){

            $modifiedData = $modules    ->map(function($item) {
                $item->file = "https://genzedu.id/storage/" . $item->file;
                return $item;
            });

            return response()->json([
                "status" => "EDU-001",
                "message" => "Modul Ajar berhasil di Get",
                "data" => $modifiedData,
                'current_page' => $modules->currentPage(),
                'last_page' => $modules->lastPage(),
                'per_page' => $modules->perPage(),
                'total' => $modules->total(),
            ]);
        }
        return response()->json([
            "status" => "EDU-002",
            "message" => "Module Ajar tidak ditemukan",
            "data" => (object) []
        ]);
    }
}
