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

  <!--font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .carousel-item {
      height: 80vh;
      min-height: 300px;
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .navbar-btn {
    border-color: #000000 !important;
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
    color: rgb(0, 0, 0) !important;
    background-color: #FFC700;
    padding: 6px 12px !important;
    margin: 0px 0px 0px 10px;
    }
    .navbar-btn:hover {
        color: rgb(0, 0, 0) !important;
        background-color: #ffffff !important;
        border-color: #000000 !important;
    }
    html,body{
      display: block;
    }
    canvas{
      width: 100%;
      display: block;
      position: fixed;
      top: 0;
      z-index: -1;
    }
    .header-position{
      position: sticky;
      top: 0;
      z-index: 1;
    }
    .carousel-control-prev{
      z-index: 0;  
    }
    .carousel-control-next{
      z-index: 0;
    }

  </style>

  @livewireStyles
    
</head>
<body>
  <canvas id="canvas"></canvas>
  <header class="header-position" style="background-color: #ffc700";>
    <div class="navbar navbar-dark shadow-sm">
      <div class="container">
        <a href=" {{ route('landing') }}" class="navbar-brand d-flex align-items-center">
        <img src="../../../img/logo.png" style="width: 70%"/>  
        </a>
        <h1 style="font-size: 3em; color: black"><strong>The Meeting Point</strong></h1>
        <button class="navbar-btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <img src="../../../img/menu.png" alt="">
        </button>
      </div>
    </div>
    <div class="collapse " style="background-color: #ffc700" id="navbarHeader">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-sm-10 offset-md-1 py-4">
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
                        @auth
              
                        @if (Auth::user()->isAdmin())
                          <a href="{{ route('events.create') }}" class="styleAncors" >New Event</a>
                        @endif
                        
                        @endauth
                      </div>
                      <div>
                        <a id="navbarDropdown" class="styleAncors nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                        </a>
  
                        <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdown">
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
  <script type="text/javascript">
    //Fuente Original :  http://timelessname.com/sandbox/matrix.html
    //Configura el canvas para que ocupe la pantalla entera 
    canvas.height = window.screen.height;
    canvas.width = window.screen.width;

    // una entrada en el array por columna de texto
    //cada valor represnta la posición y actual de la columna.  (en canvas 0 es en la parte superior y los valores positivos de y van disminuyendo)
    var columns = []
    for (i = 0; i < 256; columns[i++] = 1);

    //ejecutado una vez por fotograma
    function step() {
        //Ligeramente oscurece todo el canvas dibujando un rectángulo negro casi trasnsparente sobre todo el canvas
        /*esto explica tanto el flash inicial de blanco a negro (por defecto el canvas es blanco y progresivamente se convierte en negro) como el fading de los caracteres.*/
        canvas.getContext('2d').fillStyle = 'rgba(0,0,0,0.05)';
        canvas.getContext('2d').fillRect(0, 0, canvas.width, canvas.height);
        
        //verde
        canvas.getContext('2d').fillStyle = '#0F0';
        //para cada clolumna
        columns.map(function (value, index) {
            //fromCharCode convierte puntos de código unicode ( http://en.wikipedia.org/wiki/Code_point ) a un string
            //Los code points están en el rango 30000-30032 (0x7530-0x7550) (田-畐)
            //que está incluido en el bloque de ideogramas unificado CJK ( http://en.wikipedia.org/wiki/CJK_Unified_Ideographs )
            var character = String.fromCharCode(9e10 +
                                                Math.random() * 33);
            //dibujar el carácter
            canvas.getContext('2d').fillText(character, //texto
                                            index * 10, //x
                                            value //y
                                            );
            
            //desplaza hacia abajo el carácter
            //si el carácter es menor de 758 entonces hay una posibilidad aleatoria de que sea reseteado
            columns[index] = value > 758 + Math.random() * 1e4 ? 0 : value + 10
        })
    }

    //1000/33 = ~30 veces por segundo
    setInterval(step, 33)
  </script>
  @livewireScripts
  
</body>
</html>