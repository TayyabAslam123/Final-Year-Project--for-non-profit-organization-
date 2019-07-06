
    
  @extends('layout.um')

  @section('content')
  <div class="hero-wrap" style="background-image: url('https://cdn.pixabay.com/photo/2012/10/26/03/11/children-63175_960_720.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size:100px;">CAMPAIGNS</h1>
    </div>
      </div>
    </div>
  </div>

  @if (count($pos)>0)
 
  
    <section class="ftco-section">
        
      <div class="container">
      	<div class="row">
            @foreach($pos as $pos)
            <?php 
              $calu=$pos->amount_raised / $pos->amount_req *100;
              

              ?>
              
      		<div class="col-md-4 ftco-animate">
              
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url('storage/cover_images/{{$pos->cover_image}}');"></a>
    					<div class="text p-3 p-md-4">
            
    						<h3><a href="http://localhost/AdminPanel/public/campaign/{{$pos->id}}">{{$pos->title}}</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
    						<span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success" style="background-color:gray;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $calu ?>%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">RS {{$pos->amount_raised}} raised of {{$pos->amount_req}}</span>
            
               <a href="http://localhost:8080/AdminPanel/public/donations/{{$pos->id}}"">
                <button>
                  DONATE NOW </button>
               </a>
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