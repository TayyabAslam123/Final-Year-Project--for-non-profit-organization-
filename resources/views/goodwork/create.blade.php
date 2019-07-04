@extends('layout.master')

@section('content')

<h1>Add Goodwork</h1>
<br>

 
 


  {!! Form::open(['method'=>'post','files' => true,'action' => 'GoodworkController@store']) !!}

    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title ">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">DETAILS</label>
      <?php
     // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
      ?>
      <textarea class="form-control" rows="5" name="body"  placeholder="Enter Details"></textarea>
    </div>
    

    <div class="form-group">
      <label for="exampleInputEmail1">SUPPORTERS</label>
      <textarea class="form-control" rows="3" name="supporters"  placeholder="Enter Supporters"></textarea>
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