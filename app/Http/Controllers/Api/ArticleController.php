<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {
        $articles = Article::paginate(5);
        
        if($articles){

            $modifiedData = $articles    ->map(function($item) {
                $item->file = "https://genzedu.id/storage/" . $item->banner;
                return $item;
            });

            return response()->json([
                "status" => "EDU-001",
                "message" => "Artikel berhasil di Get",
                "data" => $modifiedData,
                'current_page' => $articles->currentPage(),
                'last_page' => $articles->lastPage(),
                'per_page' => $articles->perPage(),
                'total' => $articles->total(),
            ]);
        }
        return response()->json([
            "status" => "EDU-002",
            "message" => "Artikel tidak ditemukan",
            "data" => (object) []
        ]);
    }
}
