<div>
    <div style="width:100%">
      <h2 class="mt-3" style="color:white ;font-size: 3em; display:flex; justify-content: center">Events</h2>
    </div>
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          @if (sizeof($myEvents) == 0)
            <h2 class="text-white">You're not subscribed to any events. </h2>
          @endif

          @foreach ($myEvents as $itemEvent)
            <div class="col">
              <div class="card shadow-sm h-100">
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
                    <p class="card-text">Persons : {{$itemEvent->countStudents()}}/ {{ $itemEvent->people }}</p>
                  </div>

                  <div class="d-flex justify-content-center align-items-center flex-column">

                    <button type="submit" wire:click="detach({{$itemEvent->id}})" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Unsubscribe</button>

                  </div>

                </div>
              </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
</div>
