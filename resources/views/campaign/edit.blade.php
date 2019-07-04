@extends('layout.master')

@section('content')
    


{!! Form::open(['action' => ['CampaignController@update',$post->id],'method'=>'post']) !!}
 
{{Form::label('title','TITLE')}}
{{Form::text('title',$post->title,['class'=>'form-control'])}}

<hr>

{{Form::label('body','DETAILS')}}
{{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control'])}}


<hr>

{{Form::label('amount_req','AMOUNT REQUIRED')}}
{{Form::text('amount_req',$post->amount_req,['id'=>'article-ckeditor','class'=>'form-control'])}}

<hr>


{{Form::label('amount_raised','AMOUNT RAISED')}}
{{Form::text('amount_raised',$post->amount_raised,['id'=>'article-ckeditor','class'=>'form-control'])}}

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