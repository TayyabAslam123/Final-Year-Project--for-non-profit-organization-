<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GOODWILL PAKISTAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700')}}" rel="stylesheet">
    <link href="{{URL::to('https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('user/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{URL::to('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::to('user/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('user/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{URL::to('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::to('user/css/style.css')}}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="color:chocolate;" href="user/index.html">GOODWILL<br> PAKISTAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="http://localhost:8080/AdminPanel/public/site" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="user/about.html" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="http://localhost:8080/AdminPanel/public/campaign" class="nav-link">Campaign</a></li>
          <li class="nav-item active"><a href="http://localhost:8080/AdminPanel/public/ngo" class="nav-link">Ngos</a></li>
          <li class="nav-item active"><a href="user/blog.html" class="nav-link">Projects</a></li>
         
          <li class="nav-item active"><a href="http://localhost:8080/AdminPanel/public/medicalcamp" class="nav-link">MedicalCamps</a></li>
          <li class="nav-item active"><a href="user/contact.html" class="nav-link">Contact</a></li>
         <div>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" style="background-color:chocolate;color:white;">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('SIGN IN') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        
                            <a class="dropdown-item" href="{{ url('/myprofile') }}">
                           
                                          
                            Profile
                         </a>
                         
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            
                        </div>
                     

                          
                      </div>


                    </li>
                @endguest
            </ul>

         </div>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
 


    <!--MAIN CONTENT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    @yield('content')

    <!--END MAIN CONTENT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

		<section class="ftco-section-3 img" style="background-image: url(user/images/bg_3.jpg);display:none;">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(user/images/bg_4.jpg);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">Be a volunteer</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(user/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(user/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
                <li><a href="#" class="py-2 d-block">Causes</a></li>
                <li><a href="#" class="py-2 d-block">Event</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::to('user/js/jquery.min.js')}}"></script>
  <script src="{{URL::to('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::to('user/js/popper.min.js')}}"></script>
  <script src="{{URL::to('user/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::to('user/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::to('user/js/aos.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::to('user/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::to('user/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{URL::to('user/js/scrollax.min.js')}}"></script>
  <script src="{{URL::to('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{URL::to('user/js/google-map.js')}}"></script>
  <script src="{{URL::to('user/js/main.js')}}"></script>
    
  </body>
</html>