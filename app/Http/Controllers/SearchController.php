<?php

namespace App\Http\Controllers;

use App\Article;

class SearchController extends Controller
{
    public function search(){
        $search = request()->input('search');
        $articles = Article::query()->where('author', 'LIKE', '%'. $search .'%')->get();

        if (! empty($articles)){
            return view('search', compact('articles', $articles));
        }

        return 'No Results!.';
    }

//    public function filter()
//    {
//        $dachzeile = request()->get('dachzeile');
//        $articles = Article::query()->where('dachzeile', '=', $dachzeile)->get();
//
//        return view('search', compact('articles', $articles));
//    }
}
