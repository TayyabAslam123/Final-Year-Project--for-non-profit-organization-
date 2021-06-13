<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\scholarship;
use DB;

class ScholarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos= DB::select('select * from scholarships');
      //  return view('scholarship.scholarships')->with('pos',$pos);    
   
   
    return view('user_scholarship.scholarship')->with('pos',$pos);    
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scholarship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new scholarship;
    $post->title =$request->input('title');
    $post->abstract =$request->input('abstract');
    $post->details =$request->input('details');
    $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=scholarship::find($id);
      return view('scholarship.show')->with('post',$post);  
     // return view('user_scholarship.show')->with('post',$post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=scholarship::find($id);
        return view('scholarship.edit')->with('post',$post);  
        
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
        $post=scholarship::find($id);
        $post->title =$request->input('title');
        $post->abstract =$request->input('abstract');
        $post->details =$request->input('details');
        $post->save();
        return redirect('/ngo')->with('success','Ngo updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=scholarship::find($id);
       $post->delete();
       return redirect('/scholarship')->with('success','DELETED');;
     

    }
}
