<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="color:chocolate;" href="user/index.html">GOODWILL<br> PAKISTAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item active"><a href="{{url('/site')}}" class="nav-link">Home</a></li>
           <li class="nav-item active"><a href="{{url('/campaign')}}" class="nav-link">Campaign</a></li>
           <li class="nav-item active"><a href="{{url('/ngo')}}" class="nav-link">Ngos</a></li>
           <li class="nav-item active"><a href="{{url('/goodwork')}}" class="nav-link">Goodwork</a></li>
           <li class="nav-item active"><a href="{{url('/medicalcamp')}}" class="nav-link">MedicalCamps</a></li>
           <li class="nav-item active"><a href="{{url('/about-goodwill')}}" class="nav-link">About GoodWill</a></li>
           <li class="nav-item active"><a href="{{url('msg/create')}}" class="nav-link">Contact</a></li>
         <div>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" style="background-color:chocolate;color:cornsilk;">
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
                    </li>
                @endguest
            </ul>

         </div>
        </ul>
      </div>
    </div>
  </nav>  
  <!-- END nav -->