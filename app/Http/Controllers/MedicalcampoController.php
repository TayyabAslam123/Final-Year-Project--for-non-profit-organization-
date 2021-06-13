<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\medicalcamp;
use DB;

class MedicalcampoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {

    //     $this->middleware('auth',['except'=>['index','show']]);


    //     //$this->middleware('auth');
    
    
    // }

    public function camps()
    {
    
    // $pos=medicalcamp::all();
      //      return view('mcamp.mcamps')->with('pos',$pos); 
      
      $pos=medicalcamp::all();
          return view('Ngo_org.medicalcamp')->with('pos',$pos); 

            
        }

    public function showing()
    {
     $pos=medicalcamp::all();
         return view('mcamp.mcamps')->with('pos',$pos); 


            
        }

    public function verify()
{

    
        $pos= DB::select('select * from medicalcamps where status="not approve" ');
         
        return view('mcamp.verify')->with('pos',$pos);  
        
    }


    public function index()
    {
        $pos=medicalcamp::where('status','approve')->get();
       return view('user_mcamp.mcamp')->with('pos',$pos); 

  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mcamp.create');;
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
            











        $post= new medicalcamp;
    $post->title =$request->input('title');
    $post->venue =$request->input('venue');
    $post->city=$request->input('city');

    $post->description =$request->input('description');
    $post->date=$request->input('date');

    
    $post->cover_image =$fileNameToStore;
    $post->save();



    //////redirect to posts
   return redirect('/mcamp')->with('success','CONGRATULATION YOU ADDED A NEW MEDICAL CAMP');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if(auth()->user()->role=="ngo"){
            $post=medicalcamp::find($id);
            return view('newngo.showm')->with('post',$post);

        }
       


        else{
            
            $post=medicalcamp::find($id);
            return view('user_mcamp.show')->with('post',$post);
        }
    //return $post;
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post=medicalcamp::find($id);

    if(auth()->user()->role=="admin"){
        return view('mcamp.edit')->with('post',$post); 
    }
        
     
    if(auth()->user()->role=="ngo"){
        return view('newngo.editm')->with('post',$post); 
    }
        
    
     
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
        $post=medicalcamp::find($id);
        $post->title =$request->input('title');
        $post->venue =$request->input('venue');
        $post->city=$request->input('city');
        
        $post->status=$request->input('status');

        $post->save();
     

        return redirect('/show_medicalcamp')->with('success','MEDICAL CAMP APPROVED');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=medicalcamp::find($id);
        $post->delete();
      //  return redirect('http://localhost/AdminPanel/public/medicalcamp')->with('success','DELETED');;
      
      
     

      if(auth()->user()->role=="admin"){
        return redirect('/show_medicalcamp')->with('success','YOU HAVE DELETED A MEDICAL CAMP');;   
    }
        
     
    if(auth()->user()->role=="ngo"){
        return redirect('/mcamp')->with('success','YOU HAVE DELETED A MEDICAL CAMP');;
    }
        
    
  
    }
}
