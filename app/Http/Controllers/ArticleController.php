<?php

namespace App\Http\Controllers;

use App\Http\Resources\Article as ArticleResource;
use App\Http\Resuests;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get articles
         $articles =Article::paginate(5);

         //return collection of articles as a resource
        // return ArticleResource::collection($articles);

        $articles = Article::all();
        return view('articles.index',[
            'articles'=>$articles
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       /* $article = new Article;
        $article->name=$request->input('name_article');
        $article->description=$request->input('description_article');
        $article->price=$request->input('price_article');
        $article->save();
        $type_image='articles';
        $picture = \App\Picture::store($request, $article->id, $type_image);*/

        $article = new Article([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price')
          ]);
    
          $article->save();
    
          return response()->json('successfully added');



         //return response()->json(['status'=>'success','msg'=>'Article created successfully']);
       // return redirect('articles/'.$article->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article_id)
    {
        $article = Article::findOrFail($article_id);
        $article->pictures;
        return view("articles.show",[
            'article' => $article,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
        $article = Article::findOrFail($article);
        $article->delete();
        return redirect('articles/');
    }

    public function showtrash()
    {
        $articles = Article::onlyTrashed()->get();
        return view('articles.trash',[
            'articles' => $articles,
        ]);
        
    }

    public function restore($id)
    {
        Article::onlyTrashed()->find($id)->restore();
        return back();
    }
}
