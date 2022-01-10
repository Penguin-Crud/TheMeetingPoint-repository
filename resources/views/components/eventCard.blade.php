@props(['itemEvent'])
<div class="col">
    <div class="card shadow-sm">
      {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
      <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $itemEvent->image }}" alt="No funciona">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <p class="card-text" style="font-weight:bold">{{ $itemEvent->title }}</p>
          <div class="d-flex justify-content-between">
            <p class="card-text">{{ $itemEvent->date }}</p>
            <p class="card-text ms-2">{{ $itemEvent->time }}</p>
          </div>
        </div>
        <p class="card-text">{{ $itemEvent->description }}</p>
        <div class="d-flex justify-content-between">
          <button class="bg-warning text-white">Allow</button>
          <p class="card-text">Persons : 0 / {{ $itemEvent->people }}</p>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column">
          @auth
              
          @if (Auth::user()->isAdmin())
          
          <div class="btn-group mt-2">
            <form action="{{route('events.destroy', ['id' => $itemEvent->id])}}" method="POST" class="me-1" style="width: 6vw">
              @csrf
              <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button> 
              @method('DELETE')
            </form>
            
            <a href="{{route('events.edit', ['id' => $itemEvent->id])}}" class="ms-1" style="width: 6vw">
              <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>
            </a>
          </div>
          
          @endif
          @endauth
        </div>

      </div>
    </div>
</div>