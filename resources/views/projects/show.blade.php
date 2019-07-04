@extends('layout.master')

@section('content')
<h1>ALL PROJECTS</h1>

@if (count($pos)>0)
@foreach($pos as $pos)

 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
        <div class="card-header py-3" style="display:inline;">

        <h6 class="m-0 font-weight-bold text-primary">{{$pos->title}}</h6>
        
        </div>
        <div class="card-body">
        <h6>{{$pos->abstract}}</h6>
      
        </div>
      </div>


      @endforeach
@else
<p>NO DATA</p>
@endif


@endsection