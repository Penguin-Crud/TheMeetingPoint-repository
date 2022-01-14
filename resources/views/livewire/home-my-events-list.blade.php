<div>
    <div style="width:100%">
      <h2 style="color:white ;font-size: 3em; display:flex; justify-content: center">Events</h2>
    </div>
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         
          @if (sizeof($myEvents) == 0)
            <h2 class="text-white">You're not subscribed to any events. </h2>
          @else
            @foreach ($myEvents as $itemEvent)
              <x-myEventCard :itemEvent='$itemEvent'/>
            @endforeach
          @endif

        </div>
      </div>
    </div>
</div>
