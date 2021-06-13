@extends('layout.um')

@section('content')

<div class="container fluid" >

        <div class="row">
        <div class="col-sm-12">
        <h1 style="color:chocolate">{{$post->title}} </h1>
        
       
<h2>{{$post->abstract}}</h2>
    
    
   <p> {{$post->details}}</h3>
        </div>

</div>
</div>


      @endsection