@extends('Ngo_org.main')

@section('content')

<h1 style="color:black;"> ADD A NEW Campaign</h1>
<br>
<?php
 // {!! Form::open(['action' => 'CampaignController@store','method'=>'post']) !!}
  //<fieldset>
   /// <legend>Personal information:</legend>
   // First name:<br>
   // <input type="text" name="title" >
   // <br>
   // Last name:<br>
   //<input type="text" name="body" >
   // <br><br>
   // amount:<br>
   // <input type="number" name="amount_req" >

    //amount:<br>
    //<input type="number" name="amount_raised" >


    //<input type="submit" value="Submit">
  //</fieldset>


  //{!! Form::close() !!}

  /////////////////

?>
 
  {!! Form::open(['method'=>'post','files' => true,'action' => 'CampaignController@store']) !!}

    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title Of Campaign">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">DETAILS</label>
      <?php
     // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
      ?>
      <textarea class="form-control" rows="4" name="body"  placeholder="Enter Details"></textarea>
    </div>
    

    <div class="form-group">
      <label for="exampleInputEmail1">AMOUNT REQUIRED</label>
      <input type="number" class="form-control" name="amount_req" aria-describedby="emailHelp" placeholder="Enter AMOUNT Required">
    </div>
    

    <div class="form-group">
      <label for="exampleInputEmail1">AMOUNT RAISED</label>
      <input type="number" class="form-control" name="amount_raised" aria-describedby="emailHelp" placeholder="Enter Amount Raised">
    </div>
    
    <br>
    <br>
      {{Form::file('cover_image')}}
    
      <br>
      <br>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
  </form>



  {!! Form::close() !!}

  
  @endsection