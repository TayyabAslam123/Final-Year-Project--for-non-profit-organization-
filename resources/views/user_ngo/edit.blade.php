@extends('layout.um')

@section('content')
    


{!! Form::open(['action' => ['NgoController@update',$post->id],'method'=>'post']) !!}
 
{{Form::label('name','NAME')}}
{{Form::text('name',$post->name,['class'=>'form-control'])}}


<br>
{{Form::label('details','DETAILS')}}
{{Form::textarea('details',$post->details,['id'=>'article-ckeditor','class'=>'form-control'])}}

<bR>
    

{{Form::hidden('_method','Put')}}

{{Form::submit('submit',['class'=>'btn btn-primary'])}}


{!! Form::close() !!}

@endsection