@extends('layout.master')

@section('content')

<h1>ADD A NEW SCHOLARSHIPS</h1>
<br>


  {!! Form::open(['action' => 'ScholarController@store','method'=>'post']) !!}
    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title ">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">ABSTRACT</label>
      <?php
     // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
      ?>
      <textarea class="form-control" rows="2" name="abstract"  placeholder="Enter Abstract"></textarea>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">DETAILS</label>
        <?php
       // <input type="text-area" class="form-control" name="body" aria-describedby="emailHelp" placeholder="Enter Details">
        ?>
        <textarea class="form-control" rows="6" name="details"  placeholder="Enter Details"></textarea>
      </div>

<br>
<br>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </form>
  </form>



  {!! Form::close() !!}

  
  @endsection