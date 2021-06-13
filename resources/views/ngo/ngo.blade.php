@extends('layout.master')

@section('content')
<h1>ALL REGISTERED NGOS</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NAME</th>
            <th scope="col">DETAILS</th>
            <th scope="col">STATUS</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
      
        <tbody>
            <?php $a=1 ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->name}}</td>
            <td>{{$pos->details}}</td>
            <td>{{$pos->status}}</td>
            
            <td>

                <a href='{{url("ngo/$pos->id")}}''>
                  <button class="btn btn-primary">
                    VIEW
                  </button>
                </a>

            </td>

<td>
            {!!Form::open(['action'=>['NgoController@destroy',$pos->id],'method'=>'post'])!!}



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