@extends('layout.master')

@section('content')
<h1>All SCHOLARSHIPS</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">ADDED AT</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
      
        <tbody>
            <?php $a=1 ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->title}}</td>
            <td>{{$pos->created_at}}</td>
            <td> <a href="http://localhost/AdminPanel/public/scholarship/{{$pos->id}}">
              <button class="btn btn-primary">
                VIEW
              </button>
            </a></td>


            <td>
                {!!Form::open(['action'=>['ScholarController@destroy',$pos->id],'method'=>'post'])!!}



                {{Form::hidden('_method','DELETE')}}
                
                <button class="btn btn-danger ">
                       DELETE
                        </button>
                {!!Form::close()!!}
            </td>



            <td>
                <a href="http://localhost/AdminPanel/public/projects/{{$pos->id}}">
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