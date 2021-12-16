<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.1/examples/album/ -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>TheMeetingPoint</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

  

      <!-- Bootstrap core CSS -->
  <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

    
</head>

<body>
    
  <header class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                    <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">My events</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="album py-5 bg-light">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
                @foreach ($events as $itemevent)
                    
                <div class="col">
                  <div class="card shadow-sm">
                    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $itemevent->image }}" alt="No funciona">
                    <div class="card-body">
                      <p class="card-text">{{ $itemevent->title }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <form action="/events" method="POST">
                            @csrf
                            @method('DELETE')
                          </form>
                          <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button> 
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">10 - I Like</small>
                      </div>
                    </div>
                  </div>
                </div>
        
                @endforeach
        
              </div>
            </div>
          </div>

            </div>
        </div>
    </div>
  </header>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="https://getbootstrap.com/docs/5.1/examples/album/#">Back to top</a>
      </p>
      <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

  <script src="./Album example · Bootstrap v5.1_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body></html>