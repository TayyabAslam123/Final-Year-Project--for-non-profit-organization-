
 
  @extends('layout.master')

  @section('content')
  <h1>VERIFY NEW MEDICAL CAMPS</h1>
  
  @if (count($pos)>0)
  
  
  
  <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">TITLE</th>
              <th scope="col">CITY</th>
              <th scope="col">VIEW & APPROVE</th>
                
            
  
            </tr>
          </thead>
        
          <tbody>
            <?php ////for numbering var a used?>
            <?php $a=1 ?>
                  @foreach($pos as $pos)
            <tr>
                  
            <th scope="row"><?php echo $a++ ?></th>
              <td>{{$pos->title}}</td>
              <td>{{$pos->city}}</td>
              <td>
              <a href="http://localhost/AdminPanel/public/medicalcamp/{{$pos->id}}/edit">
                <button class="btn btn-primary">
                    VIEW & APPROVE
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
     