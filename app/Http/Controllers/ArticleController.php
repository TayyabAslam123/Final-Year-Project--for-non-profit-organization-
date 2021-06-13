<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
///////////////////////
use App\Http\Requests;
use App\Campaign;
use App\goodwork;
use App\Ngo;
//use App\Http\Resources\Article as ArticleResource;
/////////////////////////

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 

    
     */
   
    public function in()
    {
        //$articles=Article::paginate(2);
        // \Log::debug($articles);  
        //return response("Hello", 200);
        
        //$a=Campaign::all();
        $a=goodwork::all();
        
        return response($a,200)->header('access-control-allow-origin','*');

    }

    public function index()
    {
        //$articles=Article::paginate(2);
        // \Log::debug($articles);  
        //return response("Hello", 200);
        
        $a=Campaign::all();
       
        
        return response($a,200)->header('access-control-allow-origin','*');

    }
    public function ngg(){
        $a=Ngo::all();
        return response($a,200)->header('access-control-allow-origin','*');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article=$request->isMethod('put') ? Article::findOrFail
        ($request->article_id):new Article;
        $article->id=$request->input('article_id');
        $article->titile=$request->input('title');
        $article->body=$request->input('body');

        if($article->save()){
            return new ArticleResource($article);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Campaign::findorFail($id);
        return new ArticleResource($article); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::findorFail($id);

        if($article->delete()){
        return new ArticleResource($article); 
    }
    }
}
