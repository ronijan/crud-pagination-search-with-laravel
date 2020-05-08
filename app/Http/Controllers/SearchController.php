<?php

namespace App\Http\Controllers;

use App\Article;

class SearchController extends Controller
{
    public function search()
    {
        $search = request()->input('search');

        $articles = Article::query()
            ->orWhere('title', 'LIKE', '%' . $search . '%')
            ->where('author', 'LIKE', '%' . $search . '%')
            ->orWhere('big_title', 'LIKE', '%' . $search . '%')
            ->orWhere('sub_title', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->get();

        return view('search', compact('articles', $articles));
    }
}
