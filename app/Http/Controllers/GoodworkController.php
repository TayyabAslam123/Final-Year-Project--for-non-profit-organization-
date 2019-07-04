<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\goodwork;
use DB;

class GoodworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
   

 
 if (auth()->user()->role=='admin'){
    $pos= DB::select('select * from goodworks');
    return view('goodwork.goodwork')->with('pos',$pos); 
    }

else{ $pos= DB::select('select * from goodworks');
    return view('user_goodwork.goodwork')->with('pos',$pos);   
}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goodwork.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            
        }
            
            else{$fileNameToStore='noimg.jpg';}
            
            




        $post= new goodwork;
    $post->title =$request->input('title');
    $post->details =$request->input('body');
    $post->supporters=$request->input('supporters');
    $post->cover_image =$fileNameToStore;
    $post->save();



    //////redirect to posts
   return redirect('http://localhost/AdminPanel/public/goodwork')->with('success','CONGRATULATION YOU ADDED A NEW CAMPAIGN');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=goodwork::find($id);
      //return view('goodwork.show')->with('post',$post);  
   
   
       return view('user_goodwork.show')->with('post',$post);  
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
        $post=goodwork::find($id);
        $post->delete();
        return redirect('http://localhost/AdminPanel/public/goodwork')->with('success','DELETED');;
    
   
    }
}
