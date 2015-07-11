<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use App\Http\Requests;
use Carbon\Carbon;

#use Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesCntlr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ArticleRequest $request  /*Request $request*/)
    {
        //Validation happens before the method is executed.
        //Validation without using Laravel form request
        #$this->validate($request, ['title' => 'required', 'body' => 'required']);
        
        #$input = Request::all();
        #$input['published_at'] = Carbon::now();
        #return $input;
        Article::create($request->all()); 

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        /* Find or fail handles the null case
        if (is_null($article)) {
            abort(404);
        }
        */
        #dd($article);
        #return $article;

        #dd($article->published_at); //Datadump

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
