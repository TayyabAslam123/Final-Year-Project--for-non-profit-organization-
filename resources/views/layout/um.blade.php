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
    

    @include('include.menu')
    <!--MAIN CONTENT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    @include('layouts.message')
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


@include('include.footer')    
  

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