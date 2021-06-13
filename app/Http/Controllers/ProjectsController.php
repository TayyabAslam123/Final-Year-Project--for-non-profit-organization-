<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\projects;
use DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function projects()
    {
    
        $pos=projects::all();
        return view('Ngo_org.all_projects')->with('pos',$pos);  
        }

    public function showing()
    {
    
     $pos=projects::all();
            return view('campaign.showing')->with('pos',$pos);  
            
        }

    public function verify()
{

    
        $pos= DB::select('select * from projects where status="not approve" ');
         
        return view('campaign.verification')->with('pos',$pos);  
        
    }


    public function index()
    {
       // $pos= DB::select('select * from projects');
       // return view('projects.projects')->with('pos',$pos);
       
       $pos= DB::select('select * from projects');
     return view('Ngo_org.all_projects')->with('pos',$pos);
       
       
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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

            
        $post=new projects();
        $post->title =$request->input('title');
        $post->details =$request->input('details');
        $post->status =$request->input('status');
        $post->cover_image =$fileNameToStore;
       
      
        
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
        //
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
        $post=projects::find($id);
       $post->delete();
       return redirect('/projects')->with('success','DELETED');;
     


    }
}
