@extends('layout.master')

@section('content')





<div class="card shadow mb-4" >
        <div class="card-header py-3" >
        <h6 class="m-0 font-weight-bold text-primary">{{$post->title}}</h6>
        <br>
        <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" width="100%" >
        <div class="btn-group" role="group" aria-label="Basic example">
          
            <button type="button" class="btn btn-primary">EDIT</button>
    
          </div> 


          
      </div>
        <div class="card-body" >
     
          <h4>Details:</h4>
          <h6>{{$post->details}}</h6>
          <h4>Supporters:</h4>
          <h6>{{$post->supporters}}</h6>
       
        </div>
      </div>

      @endsection