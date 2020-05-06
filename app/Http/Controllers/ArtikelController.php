<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::query()->orderBy('id', 'desc')->paginate(8);

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

        Artikel::create($request->all());

        return Redirect::to('articles')
            ->with('success','Greate! Artikel created successfully.');
    }

    public function show($id)
    {
        $article = Artikel::query()->findOrFail($id);
        return view('articles.show')->with('article', $article);
    }

    public function edit($id)
    {
        $article = Artikel::query()->findOrFail($id);
        return view('articles.edit')->with('article', $article);
    }

    public function update(Request $request, Artikel $articles)
    {
        $request->validate([
            'teaserbild' => 'required',
            'dachzeile' => 'required',
            'ueberschrift' => 'required',
            'teasertext' => 'required',
        ]);

        $update = ['teaserbild' => $request->teaserbild, 'ueberschrift' => $request->ueberschrift, 'teasertext' => $request->teasertext];
        Artikel::where('id',$articles)->update($update);

        return Redirect::to('articles')
            ->with('success','Great! articles updated successfully');
    }

    public function destroy($id)
    {
        Artikel::where('id',$id)->delete();

        return Redirect::to('articles')->with('success','articles deleted successfully');
    }
}
