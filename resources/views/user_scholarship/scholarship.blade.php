
    
  @extends('layout.um')

  @section('content')

  @if (count($pos)>0)
 
  
    <section class="ftco-section">
        
      <div class="container">
      	<div class="row">
            @foreach($pos as $pos)
           
              
      		<div class="col-md-12 ftco-animate" >
                <div class="cause-entry" style="background-color:light gray;"> 
                    
               <h2 style="color:chocolate;"> {{$pos->title}}</h3>
               <h4> {{$pos->abstract}}</h3>
               <br>
               <a href="http://localhost/AdminPanel/public/scholarship/{{$pos->id}}">
               <button class="btn btn-primary btn-sm">
                    READ MORE
                  </button>
                </a>
               <br>
                </div>
                <br>
               <br>
          </div>
          @endforeach
        </div>
    </div>
    
         
      
    </section>


    
    @else
<p>NO DATA</p>
@endif


    @endsection