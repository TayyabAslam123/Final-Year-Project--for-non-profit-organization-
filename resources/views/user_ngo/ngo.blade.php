
    @extends('layout.um')

    @section('content')
  
    {{-- <div class="hero-wrap" style="background-image: url('https://cdn.pixabay.com/photo/2016/07/29/06/08/people-1550501_960_720.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size:100px;">NGOS</h1>
      </div>
        </div>
      </div>
    </div> --}}
    @if (count($pos)>0)



    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
                @foreach($pos as $pos)
        	<div class="col-md-12 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-6">
        				<div class="img" style="background-image: url('storage/cover_images/{{$pos->cover_image}}');"></div>
        				<div class="info ml-6">
                    
        					<h3><a href="#">{{$pos->name}}</a></h3>
        					<span class="position">{{$pos->details}}</span>
        					<div class="text">
		        				 <a href="#">NON-PROFIT</a>
		        			</div>
        				</div>
        			</div>
            </div>
            <br><br><br>
            </div>
         
            @endforeach
        </div>
      </div>
    </section>

     
    @else
<p>NO DATA</p>
@endif


    @endsection