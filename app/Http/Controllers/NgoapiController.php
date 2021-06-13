<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use App\Http\Resources\Ngo as NgoResource;
use App\Http\Requests;
use App\Ngo;

class NgoapiController extends Controller
{
    


    public function index()
    {
        //$articles=Article::paginate(2);
        // \Log::debug($articles);  
        //return response("Hello", 200);
        
        $a=Ngo::all();
        return response($a,200)->header('access-control-allow-origin','*');

    }

}
