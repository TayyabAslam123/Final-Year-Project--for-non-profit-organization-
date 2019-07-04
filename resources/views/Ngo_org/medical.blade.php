@extends('Ngo_org.main')

@section('content')

<!DOCTYPE html>
<html>
<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<script>
  alert("CREATE A NEW MEDICAL CAMP OR SEE YOUR ADDED CAMPS ");
</script>


<div class="container">
  
        <br>
        <br>
        
        <a href="{{ url('medicalcamp/create') }}">
        <button type="button" class="btn btn-primary btn-block">CREATE A MEDICAL CAMP</button>
        </a>
        <br><br>
        <a href="{{ url('/camps') }}">
        <button type="button" class="btn btn-primary btn-block">VIEW ALL MEDICAL CAMPS</button>
        </a>
       
</div>

</body>
</html>


@endsection