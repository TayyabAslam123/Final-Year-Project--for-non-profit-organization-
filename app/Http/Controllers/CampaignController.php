<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\campaign;
use DB;

use App\Http\Requests;
use App\Http\Resource\Campaign as CampaignResource;


   


    
class CampaignController extends Controller
{

public function __construct()
    {

        $this->middleware('auth',['except'=>['index','show']]);


        //$this->middleware('auth');
    
    
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
   // public function shows($id)
    //{
       //$post=campaign::find($id);
       //return view('campaign.show')->with('post',$post);   

      // return view('campaign.show')->with('post',$post); 
   // }








//////////////////////////////////////////////////////////////////




    public function showing()
    {

        if (auth()->user()->role=='admin'){
    
     $pos=campaign::all();
            return view('campaign.showing')->with('pos',$pos);  
        }


        
            
        }

    public function verify()
{

    if (auth()->user()->role=='admin'){
    
        $pos= DB::select('select * from campaigns where status="not approve" ');
         
        return view('campaign.verification')->with('pos',$pos);             
    }
        
    }



    public function index()
    {

        //if (auth()->user()->role=='admin'){
          //  $pos=campaign::all();
            //return view('campaign.campaign')->with('pos',$pos); 
            //}
       
      // else{
        $pos= DB::select('select * from campaigns where status="approve" ');
        return view('user_campaign.camapaign')->with('pos',$pos);  
       //}
           
    
    }
        
      
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

      


        if (auth()->user()->role=='admin'){
          
            return view('campaign.create');
            }
       
       else{
        return view('user_campaign.create');
       }

       return redirect('http://localhost/AdminPanel/public/campaign')->with('success','UPDATED');;
           
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
            
            



    $post= new campaign;
    $post->title =$request->input('title');
    $post->body =$request->input('body');
    $post->amount_req=$request->input('amount_req');
    $post->amount_raised=$request->input('amount_raised');
    $post->cover_image =$fileNameToStore;
    $post->save();



    //////redirect to posts
   return redirect('/show_campaign')->with('success','CONGRATULATION YOU ADDED A NEW CAMPAIGN');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=campaign::find($id);
       //return view('campaign.show')->with('post',$post);   

       return view('user_campaign.show')->with('post',$post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=campaign::find($id);
        return view('campaign.edit')->with('post',$post); 
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
        
        $post=campaign::find($id);
        $post->title =$request->input('title');
        $post->body =$request->input('body');
        $post->amount_req=$request->input('amount_req');
        $post->amount_raised=$request->input('amount_raised');
        $post->status=$request->input('status');

        $post->save();
     

        return redirect('/show_campaign')->with('success','UPDATED');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=campaign::find($id);
        $post->delete();
        return redirect('/show_campaign')->with('success','DELETED');;
     
    }


  

    //public function doner($id)
    //{  
        
      //  $post=campaign::find($id);
        //return view('donation.donation')->with('post',$post);
      //  return view('donation.donation');
        //->with('$post',$post);
       
    //}



}
