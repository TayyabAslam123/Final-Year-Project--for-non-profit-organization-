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



    <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          height: 100%;
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
background-color: #343a40;;
          overflow-x: hidden;
          padding-top: 20px;
        }
        
        .sidenav a {
          padding: 6px 6px 6px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .main {
          margin-left: 200px; /* Same as the width of the sidenav */
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar" style="background-color:black" >
    <div class="container" >
      <a class="navbar-brand" style="color:chocolate;margin-left:150px;" href="user/index.html">NGO PANEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
    
         <div>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" >
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

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
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
    



 
    <div class="sidenav">
      <br>
      <br>
   <hr>
        <a href="{{ url('/profiles') }}">PROFILE</a>
        <hr>
        <a href="{{ url('/campaignss') }}">CAMPAIGNS</a>
        <hr>
        <a href="{{ url('/mcamp') }}">MEDICAL CAMPS</a>
        <hr>
      
   
      </div>
      
      <div class="main">
  
         

    <!--MAIN CONTENT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
  

      <h2>Welcome   {{auth()->user()->name}}!</h2>

    <div class="container-fluid">
  <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"> 
            @include('layouts.message')
          @yield('content')
        </div>
        <div class="col-md-2"></div>
     
      </div>
    </div>

    <!--END MAIN CONTENT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

		
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