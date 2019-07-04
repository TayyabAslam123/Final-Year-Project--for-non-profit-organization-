<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::to('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"
  <link href="{{URL::to('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::to('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> GOODWILL ADMINISTRATION </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/AdminPanel/public/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        
          <span>CAMPAIGNS</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Campaigns:</h6>
            <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/campaign/create">ADD A CAMPAIGN</a>
            <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/show_campaign">VIEW ALL</a>
            <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/campaign_verification">VERIFY CAMPAIGN</a>

          </div>
        </div>
      </li>


      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          
          <span>NGOS</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ngo:</h6>
            <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/ngo/create">ADD A NGO</a>
           <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/show_ngo">VIEW ALL</a>
           <a class="collapse-item" href="http://localhost:8080/AdminPanel/public/ngo_verification">VERIFY NGO</a>
          
          </div>
        </div>
      </li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemc" aria-expanded="true" aria-controls="collapsemc">
    
    <span>MEDICAL CAMPS</span>
  </a>
  <div id="collapsemc" class="collapse" aria-labelledby="headingmc" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Medical Camps:</h6>
      <a class="collapse-item" href="http://localhost/AdminPanel/public/medicalcamp/create">ADD A MEDICAL CAMP</a>
      
 
      <a class="collapse-item" href="http://localhost/AdminPanel/public/show_medicalcamp">VIEW ALL</a>
      <a class="collapse-item" href="http://localhost/AdminPanel/public/medicalcamp_verification">VERIFY MEDICALCAMP</a>
    
    </div>
  </div>
</li>


      
      <!-- Divider  <hr class="sidebar-divider"> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsengo" aria-expanded="true" aria-controls="collapsengo">
          
          <span>PROJECTS</span>
        </a>
        <div id="collapsengo" class="collapse" aria-labelledby="headingngo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Projects:</h6>
            <a class="collapse-item" href="utilities-color.html">ADD A PROJECT</a>
          
            <a class="collapse-item" href="utilities-border.html">VIEW ALL</a>
          </div>
        </div>
      </li>

      

      <!-- Heading   <div class="sidebar-heading">
        Addons
      </div> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsegw" aria-expanded="true" aria-controls="collapsegw">
          
          <span>GOODWORK</span>
        </a>
        <div id="collapsegw" class="collapse" aria-labelledby="headinggw" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Goodwork:</h6>
            <a class="collapse-item" href="http://localhost/AdminPanel/public/goodwork/create">ADD A GOODWORK</a>
            
         
            <a class="collapse-item" href="uhttp://localhost/AdminPanel/public/goodwork">VIEW ALL</a>
          </div>
        </div>
      </li>
     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
         
          <span>USERS</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">USERS:</h6>
            <a class="collapse-item" href="http://localhost/AdminPanel/public/scholarship/create">ADD A SCHOLARSHIP</a>
            <a class="collapse-item" href="http://localhost/AdminPanel/public/scholarship">VIEW ALL</a>
          
          </div>
        </div>
      </li>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/AdminPanel/public/msg">
          <i class="fas fa-fw fa-envelope"></i>
          <span>MESSAGES</span></a>
      </li>


 <!-- Nav Item - Tables -->
 <li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-arrow-right"></i>
    <span>SUBSCRIBERS</span></a>
</li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <div id="app" >
          <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:white;">
              <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">
                      GOODWILL 
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>
  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto">
  
                      </ul>
  
                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto" >
                          <!-- Authentication Links -->
                          @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
              </div>
          </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">FUNDS RAISED</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">RS 2500</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CAMPAIGNS RUNNING</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">NGOS REGISTERED</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SUBSCRIBERS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- MAIN CONTENT /////////////////////////////////////////-->
          
          @include('layouts.message')
               @yield('content')

      <!-- End of Main Content ////////////////////////////////////////////-->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::to('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::to('admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{URL::to('admin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{URL::to('admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{URL::to('admin/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
