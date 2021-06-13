@extends('layout.master')

@section('content')
    


{!! Form::open(['action' => ['MedicalcampoController@update',$post->id],'method'=>'post']) !!}
 
{{Form::label('title','TITLE')}}
{{Form::text('title',$post->title,['class'=>'form-control'])}}

<hr>

{{Form::label('venue','VENUE')}}
{{Form::textarea('venue',$post->venue,['id'=>'article-ckeditor','class'=>'form-control'])}}


<hr>
<div class="form-group">
        <label for="exampleInputEmail1">CITY</label>
    <select class="custom-select my-1 mr-sm-2" name="city">
    <option selected>{{$post->city}}</option>
        <option value="LAHORE">LAHORE</option>
        <option value="2KARACHI">KARACHI</option>
        <option value="MULTAN">MULTAN</option>
        <option value="SARGODAH">SARGODAH</option>
        <option value="GUJRANWALA">GUJRANWALA</option>
      </select>
    </div>

    {{Form::label('title','TITLE')}}
{{Form::text('title',$post->date,['class'=>'form-control'])}}

<hr>
<div class="form-group">
        <label for="exampleInputEmail1">APPROVE THE CAMPAIGN</label>
    <select class="custom-select my-1 mr-sm-2" name="status">
        <option selected>Choose...</option>
        <option value="not approve">NOT APPROVED</option>
        <option value="approve">APPROVED</option>
      
      </select>
    </div>

<hr>


{{Form::hidden('_method','Put')}}




{{Form::submit('submit',['class'=>'btn btn-primary btn-lg btn-block'])}}


{!! Form::close() !!}

@endsection