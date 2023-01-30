<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function welcome()
    {
        return response()->json("Back-end Challenge 2021 - Space Flight News", 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(count(Article::all()) == 0){
            return response()->json(['message' => 'Não há artigos cadastrados!'], 404);
        }

        $articles = Article::with(['launches', 'events'])->paginate(10);
        return $articles;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        return response()->json(Article::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_null(Article::find($id))){
            return response()->json(['message' => 'Artigo não encontrado!'], 404);
        }

        $article = Article::where('id', $id)->with(['launches', 'events'])->first();
        return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        if($article === null){
            return response()->json(['message' => 'Artigo não encontrado!'], 404);
        }

        $article->fill($request->all());
        $article->save();

        return $article;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        if(is_null($article)){
            return response()->json(['message' => 'Artigo não encontrado!'], 404);
        }

        $article->destroy();
        return response()->noContent();
    }
}
