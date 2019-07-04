<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuntionController extends Controller
{
    


    public function show(Request $request)
    {
       // $a=$id;
        //return view('donation.donation')->with('$a',$a);
        //return $s;

        

        //$pos= DB::select(select * from campaigns where id=$a);
      //  $pos = DB::table('campaigns')->select('amount_raised')->where('id', '=', $a)->get();
     // $s=DB::table('campaigns')->select('title')->where('id', '=', $a)->first()->title; 
      //$b=DB::table('campaigns')->select('details')->where('id', '=', $a)->first()->details; 
      //$c=DB::table('campaigns')->select('amount_req')->where('id', '=', $a)->first()->amount_raised; 
    //$d=DB::table('campaigns')->select('amount_raised')->where('id', '=', $a)->first()->amount_raised; 
     
      // $b=100;

   // $c=$b +$pos;

   //$data =[
    //$d
   //];


   //eturn view('donation.donation', compact('data'));













 $post=$request->input('name');
 return $post;



       // return view('donation.donation')->with('data',$data);
    }






}
