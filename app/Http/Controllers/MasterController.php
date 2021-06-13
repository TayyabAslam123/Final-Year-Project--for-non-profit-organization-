<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class MasterController extends Controller
{
    
    public function cal(){
        $a=DB::select('SELECT sum(amount) as cam FROM donations');
//return $a;
return view('layout.master')->with('a',$a);
    }
   
}
