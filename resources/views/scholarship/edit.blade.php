@extends('layout.master')

@section('content')

<h1>ADD A NEW SCHOLARSHIPS</h1>
<br>


  {!! Form::open(['action' => ['ScholarController@update',$post->id],'method'=>'post']) !!}
  
  {{Form::label('title','TITLE ')}}
  {{Form::text('title',$post->title,['class'=>'form-control'])}}
  
  
  <br>
  {{Form::label('abstract','ABSTRACT')}}
  {{Form::textarea('abstract',$post->abstract,['id'=>'article-ckeditor','class'=>'form-control'])}}
  
  
  
  <bR>
    {{Form::label('details','DETAILS')}}
    {{Form::textarea('details',$post->details,['id'=>'article-ckeditor','class'=>'form-control'])}}
    
    
    
  
  {{Form::hidden('_method','Put')}}
  
  {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  
  


  {!! Form::close() !!}

  
  @endsection