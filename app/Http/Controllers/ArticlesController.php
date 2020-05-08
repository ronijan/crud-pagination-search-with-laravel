<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $articles = Article::query()->orderBy('id', 'desc')->paginate(3);

        return view('articles.index', compact('articles', $articles));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'teaserbild' => 'required|string',
            'dachzeile' => 'required|string',
            'ueberschrift' => 'required|string',
            'teasertext' => 'required|string',
        ]);

        Article::create($data);

        return Redirect::to('articles');
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $article = Article::query()->findOrFail($id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $article = Article::query()->findOrFail($id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'teaserbild' => 'required|string',
            'dachzeile' => 'required|string',
            'ueberschrift' => 'required|string',
            'teasertext' => 'required|string',
        ]);

        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'teaserbild' => $request->teaserbild,
            'ueberschrift' => $request->ueberschrift,
            'teasertext' => $request->teasertext];

        Article::query()->where('id',$id)->update($data);

        return Redirect::to('articles');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Article::where('id',$id)->delete();

        return Redirect::to('articles');
    }
}
