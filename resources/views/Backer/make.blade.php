@extends('layout.um')

@section('content')

////
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


  
<div class="container">
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        {!! Form::open(['method'=>'post','files' => true,'action' => 'BackerController@store']) !!}

        <div class="form-group">
     
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
        </div>
        
        
        <div class="form-group">
    
            <input type="text" class="form-control" name="ph" aria-describedby="emailHelp" placeholder="Enter Your Phone NO">
          </div>
          <div class="form-group">
         
            <input type="text" class="form-control" name="cnic" aria-describedby="emailHelp" placeholder="Enter Your Cnic">
          </div>
       
        
        <div class="form-group">
        
          <textarea class="form-control" rows="4" name="address"  placeholder="Enter Address"></textarea>
         </div>
        
        <br>
        <br>
        
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        
        
        
        
        {!! Form::close() !!}
        
    </div>
    <div class="col-md-2">

    </div>


  </div>
</div>

</body>
</html>




////




@endsection