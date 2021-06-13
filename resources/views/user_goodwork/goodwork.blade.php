       
  @extends('layout.um')

  @section('content')
  
  
  @if (count($pos)>0)



    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

            @foreach($pos as $pos)

          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('storage/cover_images/{{$pos->cover_image}}');">
              </a>
              <div class="text p-4 d-block">
              
                <h3 class="heading mt-3"><a href="#">{{$pos->title}}</a></h3>
                <p>{{$pos->body}}</p>
              </div>
            </div>
          </div>
          @endforeach
      
       
        




        </div>
        
      </div>
    </section>


    @else
    <p>NO DATA</p>
    @endif
		
@endsection