<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('homepage.index', [
            'articles' => $articles,
        ]);
    }
}
