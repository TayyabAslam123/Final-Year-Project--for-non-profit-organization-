       
  @extends('layout.um')

  @section('content')
  
  
  @if (count($pos)>0)



    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

            @foreach($pos as $pos)

          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('storage/cover_images/{{$pos->cover_image}}');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">{{$pos->title}}</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
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