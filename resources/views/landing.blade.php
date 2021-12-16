@extends("layouts.headHTML")

  
@section('main')
    
  <main>
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
                    <form action="/events/{{ $itemevent->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button> 
                      @method('DELETE')
                    </form>          
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
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="https://getbootstrap.com/docs/5.1/examples/album/#">Back to top</a>
      </p>
      <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

  <script src="{{asset('events-css/bootstrap.bundle.min.js.descarga')}}" ></script>
  
@endsection


