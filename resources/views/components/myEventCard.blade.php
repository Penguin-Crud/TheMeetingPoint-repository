@props(['itemEvent'])
<div class="col">
    <div class="card shadow-sm h-100">
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
          {{-- <a href="{{ route('allowevent', ['events' => $itemEvent->id ]) }}">
            <button class="bg-warning text-white">unsubscribe</button>
          </a> --}}
          <p class="card-text">Persons : {{$itemEvent->countStudents()}} / {{ $itemEvent->people }}</p>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column">
          <form action="{{route('myevents.destroy', ['id' => $itemEvent->id])}}" method="POST" class="me-1" style="width: 7vw">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Unsubscribe</button> 
            @method('DELETE')
          </form>
        </div>

      </div>
    </div>
</div>