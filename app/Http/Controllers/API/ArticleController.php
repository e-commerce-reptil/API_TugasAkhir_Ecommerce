<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add(Request $request)
    {
        $userId = $request->user()->id;

        $detail = new Article();
        $detail->judul = $request->judul;
        $detail->description = $request->description;
        $detail->link = $request->link;
        $detail->user_id = $userId;
        $detail->save();

        return response (['success' => true]);
    }
}
