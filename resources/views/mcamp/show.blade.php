@extends('layout.master')

@section('content')





<div class="card shadow mb-4" >
        <div class="card-header py-3" >
        <h6 class="m-0 font-weight-bold text-primary">{{$post->title}}</h6>
        <br>

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger">DELETE</button>
            <button type="button" class="btn btn-primary">EDIT</button>
    
          </div> 


          
      </div>
        <div class="card-body" >
     
          <h4>VENUE:</h4>
          <h6>{{$post->venue}}</h6>
          <h4>CITY:</h4>
          <h6>{{$post->city}}</h6>
       
        </div>
      </div>

      @endsection