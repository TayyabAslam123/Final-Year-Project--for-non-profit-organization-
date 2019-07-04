@extends('layout.master')

@section('content')
<h5>MESSAGES
  
        

</h1>


@if (count($pos)>0)



<table class="table table-striped">
        <thead>
          <tr>
            
            <th scope="col">NAME</th>
          
            <th scope="col">EMAIL</th>
        
            <th scope="col">SUBJECT</th>
            <th scope="col"></th>
         
          </tr>
        </thead>
      
        <tbody>
          <?php ////for numbering var a used?>
          <?php $a=1;$count=0;?>
                @foreach($pos as $pos)
          <tr>
                
          <?php
            $count++;?>
           
            <td>{{$pos->name}}</td>
            <td>{{$pos->email}}</td>
            <td>{{$pos->subject}}</td>
           
            <td>
                    {{$pos->message}}

            
            </td>





 
            
          </tr>

          @endforeach
        </tbody>
      </table>

     
      <p>TOTAL MESSAGES(
        
              <?php
              
              echo $count ?> )
      
      </p>
@else
<p>NO DATA</p>
@endif


@endsection