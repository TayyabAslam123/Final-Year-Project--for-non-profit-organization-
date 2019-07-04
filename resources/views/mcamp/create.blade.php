@extends('Ngo_org.main')

@section('content')


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>



<h1>SCHEDUAL A NEW MEDICAL CAMP</h1>
<br>

  {!! Form::open(['method'=>'post','files' => true,'action' => 'MedicalcampoController@store']) !!}

    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title Of MEDICAL CAMP">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">VENUE</label>
      <?php
     // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
      ?>
      <textarea class="form-control" rows="3" name="venue"  placeholder="Enter Complete Address"></textarea>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">CITY</label>
    <select class="custom-select my-1 mr-sm-2" name="city">
        <option selected>Choose...</option>
        <option value="LAHORE">LAHORE</option>
        <option value="2KARACHI">KARACHI</option>
        <option value="MULTAN">MULTAN</option>
        <option value="SARGODAH">SARGODAH</option>
        <option value="GUJRANWALA">GUJRANWALA</option>
      </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">DESCRIPTION</label>
        <?php
       // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
        ?>
        <textarea class="form-control" rows="3" name="description"  placeholder="Enter Description"></textarea>
      </div>


     



      <div class="form-group">
         
          <p>SELECT DATE OF MEDICAL CAMP : <input type="text" id="datepicker" name="date"></p>

     </div>

<br>
{{Form::file('cover_image')}}
    
<br>
<br>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
  </form>



  {!! Form::close() !!}

  
  @endsection