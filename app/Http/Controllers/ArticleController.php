<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy("id", "DESC")->get();

        return view("article.index", [
            "articles" => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'file' => 'required',
        ]);

        if(!$request["article-trixFields"]["description"]){
            Alert::error('Gagal Menambah', 'Masukan konten untuk artikel!');
            return redirect()->back();
        }

        $file = $request->file('file');
        $path = $file->store('articles', 'public');

        Article::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request["article-trixFields"]["description"],
            "banner" => $path,
        ]);

        toast('Menambah Artikel Berhasil','success');
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $article = Article::whereSlug($slug)->first();

        return view("article.show", [
            "article" => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
