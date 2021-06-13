@extends('layout.master')

@section('content')
<h1>All Projects</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">CATEGORY</th>
            <th scope="col">VIEW</th>
            <th scope="col">DELETE</th>
            <th scope="col">UPDATE</th>
          </tr>
        </thead>
      
        <tbody>
            <?php $a=1 ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->title}}</td>
            <td>lol</td>
            <td> <a href="{{url('/projects/{{$pos->id}}')}}">
              <button class="btn btn-primary">
                VIEW
              </button>
            </a></td>


            <td>
                {!!Form::open(['action'=>['ProjectsController@destroy',$pos->id],'method'=>'post'])!!}



                {{Form::hidden('_method','DELETE')}}
                
                <button class="btn btn-danger ">
                       DELETE
                        </button>
                {!!Form::close()!!}
            </td>



            <td>
                <a href="{{url('/projects/{{$pos->id}}')}}">
                  <button class="btn btn-warning">
                   UPDATE
                  </button>
                </a>
               
            </td>


          </tr>
          @endforeach
        </tbody>
      </table>


@else
<p>NO DATA</p>
@endif


@endsection