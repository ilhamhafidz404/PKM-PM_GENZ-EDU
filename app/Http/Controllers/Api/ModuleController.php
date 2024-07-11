<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __invoke()
    {
        $modules = Module::all();
        
        if($modules){
            return response()->json([
                "status" => "EDU-001",
                "message" => "Modul Ajar berhasil di Get",
                "data" => $modules
            ]);
        }
        return response()->json([
            "status" => "EDU-002",
            "message" => "Module Ajar tidak ditemukan",
            "data" => (object) []
        ]);
    }
}
