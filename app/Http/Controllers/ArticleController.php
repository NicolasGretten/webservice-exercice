<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\Config\Definition\Exception\Exception;

class ArticleController extends ControllerBase
{
    /**
     * List all the articles
     *
     * List all the articles.
     *
     * @group Articles
     *
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        try {
            $articles = Article::all();
            return response()->json($articles);
        } catch (Exception $e){
            return response()->json($e->getMessage(), 500);
        }

    }

    /**
     * Retrieve an article
     *
     * Retrieve an article by his ID.
     *
     * @group Articles
     *
     * @urlParam article_id     required    Article ID      Example:1
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function retrieve(Request $request): JsonResponse
    {
        try {
            $article = Article::where('id', $request->article_id)->get();

            if (empty($article))
            {
                throw new Exception('the article doesn\`t exist', 404);
            }

            return response()->json($article);
        } catch(Excepiton $e){

        }

    }
}
