@extends('Ngo_org.main')

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


  
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1><u>LOGO</u></h1>
            <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" height="400PX" width="450px">
              

    
    <div class="jumbotron">
        <h1 style="color:black;">NGO NAME :</h1>
        <h2>{{$post->name}}</h2>
        <h1 style="color:black;">NGO DETAILS :</h1>
    <h2>{{$post->details}}</h2>
    <h1 style="color:black;">NGO STARTED AT:</h1>
    <h2>{{$post->created_at}}</h2>
    <h1 style="color:black;">NGO PHONE NUMBER :</h1>
    <h2>{{$post->ph}}</h2>
    <h1 style="color:black;">NGO ADDRESS:</h1>
    <h2>{{$post->address}}</h2>
    </div>

    </div>
  
  </div>
</div>

</body>
</html>


@endsection