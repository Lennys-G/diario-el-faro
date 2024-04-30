<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = new Article;
        $articlesBusiness = $article->getByCategory('negocios');
        $articlesHealth = $article->getByCategory('salud');
        $articlesCurrents = $article->getByCategory('actual');
        $articlesScience = $article->getByCategory('ciencia');
        $articlesSports = $article->getByCategory('deportes');
        $articlesAdvertisements = $article->getByCategory('anuncios');
        $articlesEntertainment = $article->getByCategory('entretenimiento');
        return view('index')
            ->with('articlesBusiness', $articlesBusiness)
            ->with('articlesHealth', $articlesHealth)
            ->with('articlesCurrents', $articlesCurrents)
            ->with('articlesScience', $articlesScience)
            ->with('articlesSports', $articlesSports)
            ->with('articlesAdvertisements', $articlesAdvertisements)
            ->with('articlesEntertainment', $articlesEntertainment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articles = new Article;

        // $articles->fill($request->only(['title-formCreateArticle', 'url-formCreateArticle', 'urlToImage-formCreateArticle', 'category-formCreateArticle']));
        $articles->title  = $request->get('title-formCreateArticle');
        $articles->url  = $request->get('url-formCreateArticle');
        $articles->urlToImage  = $request->get('urlToImage-formCreateArticle');
        $articles->category  = $request->get('category-formCreateArticle');

        $articles->save();

        return redirect('./articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
