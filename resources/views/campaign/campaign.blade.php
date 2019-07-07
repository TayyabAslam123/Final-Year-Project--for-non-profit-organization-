@extends('layout.master')

@section('content')
<h1>ALL CAMPAIGNS</h1>

@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITLE</th>
          
            <th scope="col">AMOUNT REQUIRED</th>
           <th scope="col">AMOUNT RAISED</th>
            <th scope="col">STARTING TIMESPAN</th>
            <th scope="col">VIEW</th>
            <th scope="col">DELETE</th>
            <th scope="col">STATUS</th>
          </tr>
        </thead>
      
        <tbody>
          <?php ////for numbering var a used?>
          <?php $a=1 ?>
                @foreach($pos as $pos)
          <tr>
                
          <th scope="row"><?php echo $a++ ?></th>
            <td>{{$pos->title}}</td>
            <td>{{$pos->amount_req}}</td>
            <td>{{$pos->amount_raised}}</td>
            <td>{{$pos->created_at}}</td>
            <td>
            <a href="http://localhost:8080/AdminPanel/public/campaign/{{$pos->id}}" >
              
              <button class="btn btn-primary">
                VIEW
              </button>
            </a>

            
            </td>


<td>
    {!!Form::open(['action'=>['CampaignController@destroy',$pos->id],'method'=>'post'])!!}



    {{Form::hidden('_method','DELETE')}}
    
    <button class="btn btn-danger ">
           DELETE
            </button>
    {!!Form::close()!!}
</td>

            <td>
{{$pos->status}}
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>


@else
<p>NO DATA</p>
@endif


@endsection