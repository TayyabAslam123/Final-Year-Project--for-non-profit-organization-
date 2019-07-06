@extends('layout.um')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


  <br><br>
<div class="container">
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
            {!! Form::open(['action' => ['BackerController@update',$pos->id],'method'=>'post']) !!}
        

            
{{Form::label('title','TITLE')}}
{{Form::text('title',$pos->name,['class'=>'form-control'])}}


        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        
        
        
        
        {!! Form::close() !!}
        
    </div>
    <div class="col-md-2">

    </div>


  </div>
</div>

<br>
<br>

</body>
</html>







@endsection