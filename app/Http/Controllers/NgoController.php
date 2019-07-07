<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ngo;
use DB;


class NgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function __construct()
    {

        $this->middleware('auth',['except'=>['index','show']]);


        //$this->middleware('auth');
    
    
    }




    public function profiles()
    {
    
           $pos=ngo::where('user_id',auth()->user()->id)->first();
            return view('Ngo_org.profile')->with('pos',$pos);  
   // return $pos->id;
        }

    
    public function showing()
    {
    
     $pos=ngo::all();
            return view('ngo.ngo')->with('pos',$pos);  
            
        }

    public function verify()
{

    
        $pos= DB::select('select * from ngos where status="not approve" ');
         
        return view('ngo.verification')->with('pos',$pos);  
        
    }



    public function index()
    {
        $pos= DB::select('select * from ngos where status="approve" ');
      //  $pos=ngo::all();
        return view('user_ngo.ngo')->with('pos',$pos);   

        /*
   if (auth()->user()->role=='admin'){
    $pos=ngo::all();
        return view('ngo.ngo')->with('pos',$pos);  
        }
   
   else{
    $pos=ngo::all();
    return view('user_ngo.ngo')->with('pos',$pos);   
   }

   */

}//////////

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
     // if (auth()->user()->role=='ngo'){
        return view ('ngo.create');  
       //     }
       
      
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



        $post=new ngo();
        $post->name =$request->input('name');
        $post->details =$request->input('details');
        $post->ph =$request->input('ph');
        $post->address =$request->input('address');

        $post->user_id =auth()->user()->id;

        
        $post->cover_image =$fileNameToStore;
        
        $post->save();

          //////redirect to posts
   return redirect('/profiles')->with('success','New ngo created');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=ngo::find($id);
     // return view('ngo.show')->with('post',$post);

     if(auth()->user()->role=="ngo"){
       
        return view('Ngo_org.show_profile')->with('post',$post);
     }


  if(auth()->user()->role=="admin"){
       
    return view('ngo.show')->with('post',$post);
     }
   

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=ngo::find($id);
        //return view('ngo.edit')->with('post',$post); 


        if (auth()->user()->role=='admin'){
            return view ('ngo.edit')->with('post',$post);  
                }
           
           else{
            return view ('user_ngo.edit')->with('post',$post);  
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
        

        $post=ngo::find($id);
        $post->name =$request->input('name');
        $post->details =$request->input('details');
        $post->status=$request->input('status');
        $post->save();
        return redirect('/show_ngo')->with('success','Ngo updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=ngo::find($id);
        $post->delete();
        return redirect('/show_ngo')->with('success','Ngo deleted');;
   
   
    }
}
