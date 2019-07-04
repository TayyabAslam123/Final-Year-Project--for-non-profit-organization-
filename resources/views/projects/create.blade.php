@extends('Ngo_org.main')

@section('content')

<h1>NEW PROJECT</h1>
<br>


{!! Form::open(['method'=>'post','files' => true,'action' => 'ProjectsController@store']) !!}
<div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Project Title">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">DETAILS</label>
      <?php
     // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
      ?>
      <textarea class="form-control" rows="3" name="details"  placeholder="Enter Details"></textarea>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">STATUS</label>
    <select class="custom-select my-1 mr-sm-2" name="status">
        <option selected>Choose...</option>
        <option value="LAHORE">COMPLETED</option>
        <option value="2KARACHI">PENDING</option>
    
      </select>   
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