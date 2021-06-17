<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // API Method
    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'description' => 'required',
             'link' => 'required'
        ]);

        $articles = new Article();
        $articles->judul = $request->judul;
        $articles->description = $request->description;
        $articles->link = $request->link;
        $articles->save();

        return response()->json([
            'message' => 'Data berhasil ditambahkan'
        ], 200);
    }
}
