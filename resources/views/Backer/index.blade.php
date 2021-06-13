@extends('layout.um')

@section('content')

<div class="jumbotron">
    <div class="container-fluid">
      



        <div class="row">
          <div class="col-md-1" ></div>
          <div class="col-md-10"> 
              @if ($pos!=NULL)
              <h2>NAME: {{$pos->name}}</h2>
              <h2>PHONE NUMBER:{{$pos->ph}}</h2>
         
         
              <h2>CNIC:{{$pos->cnic}}</h2>
              <h2>ADDRESS:{{$pos->address}}</h2>
            
              
              <a href="{{url('/campaign/'.$pos->id.'/edit')}}">
                  <button class="btn btn-primary ">
                  EDIT Profile
                  </button>
                  </a>                
              
                  <br>
                  <br>
              
                  {!!Form::open(['action'=>['BackerController@destroy',$pos->id],'method'=>'post'])!!}
              
                  {{Form::hidden('_method','DELETE')}}
                  
                  <button class="btn btn-danger">
                         DELETE Profile
                          </button>
                  {!!Form::close()!!}
              
              @else
              <h2>You have not made your profile yet</h2>

          <a href="{{url('myprofile/create')}}">

              <button class="btn btn-primary ">
                    MAKE PROFILE
                     </button>
              </a>


              @endif


            </div>
            <div class="col-md-1" ></div>
          </div>
        </div>
      </div>
@endsection