@extends('Ngo_org.main')

@section('content')
<?php
 // {!! Form::open(['action' => 'NgoController@store','method'=>'post']) !!}
  //<fieldset>
  //  <legend>Personal information:</legend>
   // NAME:<br>
  //  <input type="text" name="name" >
   // <br>
 //   DETAILS:<br>
  // <input type="text" name="details" >
//    <br><br>
 
   // <input type="submit" value="Submit">
  //</fieldset>


  //{!! Form::close() !!}
  
?>

{!! Form::open(['method'=>'post','files' => true,'action' => 'NgoController@store']) !!}



    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Title Of Ngo">
    </div>
    

    <div class="form-group">
      <label for="exampleInputEmail1">PHONE NUMBER</label>
      <input type="text" class="form-control" name="ph" aria-describedby="emailHelp" placeholder="Enter Title Of Ngo">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">ADDRESS</label>
      <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter Title Of Ngo">
    </div>
    


    <div class="form-group">
      <label for="exampleInputEmail1">DETAILS</label>
      <textarea class="form-control" rows="4" name="details"  placeholder="Enter Details"></textarea>
     
    </div>
    
    <br>
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">ATTACH YOUR LOGO</label><br>
      {{Form::file('cover_image')}}
     
    </div>

 

      <br>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
 


  {!! Form::close() !!}



  @endsection