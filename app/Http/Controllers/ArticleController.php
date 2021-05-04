<?php

namespace App\Http\Controllers;

use App\Article;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Create a new article
     *
     * Create a new article.
     *
     * @group Articles
     *
     * @bodyParam titre             required    Titre de l'article          Example: Le Titre
     * @bodyParam description       required    Contenu de l'article        Example: Lorem ipsum
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request): JsonResponse
    {
        try {

            $this->validate($request, [
                'titre' => 'required|string',
                'description'=>'required|string'
            ]);

            DB::beginTransaction();

            $article = new Article();
            $article->titre = $request->titre;
            $article->description = $request->description;
            $article->save();

            DB::commit();

            return response()->json($article);

        } catch(ValidationException $e){
            return response()->json($e->getMessage(), 409);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json($e->getMessage(), 500);
        }
    }
}
