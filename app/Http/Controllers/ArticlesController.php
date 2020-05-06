<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::query()->orderBy('id', 'desc')->paginate(8);

        return view('articles.index', compact('articles', $articles));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teaserbild' => 'required',
            'dachzeile' => 'required',
            'ueberschrift' => 'required',
            'teasertext' => 'required',
        ]);

        Article::create($request->all());

        return Redirect::to('articles');
    }

    public function show($id)
    {
        $article = Article::query()->findOrFail($id);
        return view('articles.show')->with('article', $article);
    }

    public function edit($id)
    {
        $article = Article::query()->findOrFail($id);
        return view('articles.edit')->with('article', $article);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teaserbild' => 'required',
            'dachzeile' => 'required',
            'ueberschrift' => 'required',
            'teasertext' => 'required',
        ]);

        $update = ['teaserbild' => $request->teaserbild, 'ueberschrift' => $request->ueberschrift, 'teasertext' => $request->teasertext];
        Article::where('id',$id)->update($update);

        return Redirect::to('articles');
    }

    public function destroy($id)
    {
        Article::where('id',$id)->delete();

        return Redirect::to('articles')->with('success','articles deleted successfully');
    }
}
