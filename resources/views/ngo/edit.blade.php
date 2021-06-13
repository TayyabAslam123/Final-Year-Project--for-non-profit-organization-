@extends('layout.master')

@section('content')
    


{!! Form::open(['action' => ['NgoController@update',$post->id],'method'=>'post']) !!}
 
{{Form::label('name','NAME')}}
{{Form::text('name',$post->name,['class'=>'form-control'])}}
<br>
{{Form::label('ph','Phone Number')}}
{{Form::text('ph',$post->ph,['class'=>'form-control'])}}
<br>

{{Form::label('address','Address')}}
{{Form::text('address',$post->address,['class'=>'form-control'])}}
<br>


<br>
{{Form::label('details','DETAILS')}}
{{Form::textarea('details',$post->details,['id'=>'article-ckeditor','class'=>'form-control'])}}

<bR>
    <div class="form-group">
        <h2>APPROVE THE NGO</h2>
    <select class="custom-select my-1 mr-sm-2" name="status">
        <option selected>Choose...</option>
        <option value="not approve">NOT APPROVED</option>
        <option value="approve">APPROVED</option>
      
      </select>
    </div>

{{Form::hidden('_method','Put')}}

{{Form::submit('submit',['class'=>'btn btn-primary'])}}


{!! Form::close() !!}

@endsection