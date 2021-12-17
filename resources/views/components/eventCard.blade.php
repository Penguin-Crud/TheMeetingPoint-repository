@props(['itemEvent'])
<div class="col">
    <div class="card shadow-sm">
      {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
      <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $itemEvent->image }}" alt="No funciona">
      <div class="card-body">
        <p class="card-text">{{ $itemEvent->title }}</p>
        <p class="card-text">{{ $itemEvent->author->name }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <form action="/events/{{ $itemEvent->id }}" method="POST">
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