@extends('layout.master')

@section('content')

<div class="container fluid" >

        <div class="row">
        <div class="col-sm-12">
        <h1>TITLE:- {{$post->title}} </h1>
        
       
<h2>ABSTRACT:-{{$post->abstract}}</h2>
    <h1>DETAILS:-</h1>
    
   <h3> {{$post->details}}</h3>
        </div>

</div>


      @endsection