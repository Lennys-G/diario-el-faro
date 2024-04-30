<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'urlToImage', 'category'];
    function getByCategory($category)
    {
        $articles = Article::where('category', $category)
            ->select(['id', 'title', 'url', 'urlToImage', 'content', 'category'])
            ->get();

        $formattedArticles = $articles->map(function ($article) {
            return [
                'title' => $article->title,
                'url' => $article->url,
                'urlToImage' => $article->urlToImage,
                'content' => $article->content,
                'category' => $article->category,
            ];
        })->toArray();

        return $formattedArticles;
    }
}
