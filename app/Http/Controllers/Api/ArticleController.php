<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {
        $articles = Article::all();
        
        if($articles){
            return response()->json([
                "status" => "EDU-001",
                "message" => "Artikel berhasil di Get",
                "data" => $articles
            ]);
        }
        return response()->json([
            "status" => "EDU-002",
            "message" => "Artikel tidak ditemukan",
            "data" => (object) []
        ]);
    }
}
