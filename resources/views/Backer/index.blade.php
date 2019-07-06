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
            
              @else
              <p>NO DATA</p>


              @endif


            </div>
            <div class="col-md-1" ></div>
          </div>
        </div>
      </div>
@endsection