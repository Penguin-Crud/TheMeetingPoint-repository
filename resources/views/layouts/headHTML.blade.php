<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.1/examples/album/ -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>The Meeting Point</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

  

      <!-- Bootstrap core CSS -->
  <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    .styleAncors {
      color: black;
      font-weight: bold;
    }

    .flex-anchors{
      display: flex;
      justify-content: space-between;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

    
</head>
<body style="background-color: black">
  <header style="background-color: #FFC700";>
    <div class="collapse " id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 offset-md-1 py-4">
            <ul class="list-unstyled">
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link styleAncors"  href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link styleAncors" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown flex-anchors">
                      <div>
                        <a href="{{ route('home') }}" class="styleAncors text-sm text-gray-700 dark:text-gray-500 underline">My events</a>
                        <a href="{{ route('events.create') }}" class="styleAncors" >New Event</a>
                      </div>
                      <div>
                        <a id="navbarDropdown" class="styleAncors nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                        </a>
  
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="styleAncors dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                      </div>
                    </li>
                @endguest
            </ul>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark shadow-sm">
      <div class="container">
        <a href=" {{ route('landing') }}" class="navbar-brand d-flex align-items-center">
        <img src="../../../img/logo.png" style="width: 60%"/>  
        </a>
        <h1 style="font-size: 3em; color: black"><strong>The Meeting Point</strong></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  @auth
    <nav>
      
    </nav>
  @endauth

  @yield('register')
  @yield('login')
  @yield('main')
  @yield('content')
  @yield('EventCreate')

  {{-- <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="https://getbootstrap.com/docs/5.1/examples/album/#">Back to top</a>
      </p>
      <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer> --}}

  <script src="{{asset('events-css/bootstrap.bundle.min.js.descarga')}}" ></script>

</body>
</html>