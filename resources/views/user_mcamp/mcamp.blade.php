@extends('layout.um')

  @section('content')



  <div class="hero-wrap" style="background-image: url('https://cdn.pixabay.com/photo/2016/10/30/05/46/antibiotic-1782433_960_720.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size:100px;">MEDICAL CAMPS</h1>
    </div>
      </div>
    </div>
  </div>



  @if (count($pos)>0)
 
  <section class="ftco-section">
        <div class="container">
          <div class="row">
                @foreach($pos as $pos)
              <div class="col-md-6 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                <a href="blog-single.html" class="block-20" style="background-image: url('storage/cover_images/{{$pos->cover_image}}');">
                </a>
                <div class="text p-4 d-block">
                    <div class="meta mb-3">
                    <div><a href="#">Sep. 10, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                <h3 class="heading mb-4">{{$pos->title}}<a href="#"></a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <br><span><i class="icon-map-o"></i> CITY: {{$pos->city}}</span></p>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                  <p><a href="http://localhost/AdminPanel/public/medicalcamp/{{$pos->id}}">SEE EVENT <i class="ion-ios-arrow-forward"></i></a></p>
                </div>
                
              </div>
            </div>
            @endforeach
      </section>
      
    @else
    <p>NO DATA</p>
    @endif
    
    
        @endsection