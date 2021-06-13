@extends('layout.master')

@section('content')
<h1>All Goodworks</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
            <th scope="col">SUPPORTERS</th>
            <th scope="col">VIEW</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
      
        <tbody>
            <?php $a=1 ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->title}}</td>
            <td>{{$pos->supporters}}</td>
            <td> <a href="{{url('/goodwork/{{$pos->id}}')}}">
              <button class="btn btn-primary">
                VIEW
              </button>
            </a></td>


            <td>
                {!!Form::open(['action'=>['GoodworkController@destroy',$pos->id],'method'=>'post'])!!}



                {{Form::hidden('_method','DELETE')}}
                
                <button class="btn btn-danger ">
                       DELETE
                        </button>
                {!!Form::close()!!}
            </td>



          </tr>
          @endforeach
        </tbody>
      </table>


@else
<p>NO DATA</p>
@endif


@endsection