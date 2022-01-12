<div>
    <div style="width:100%">
      <h2 style="color:white ;font-size: 3em; display:flex; justify-content: center">Events</h2>
    </div>
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($myEvents as $itemEvent)
            {{-- <p>{{$itemEvent->title}}</p> --}}
            <x-eventCard :itemEvent='$itemEvent'/>
          @endforeach
        </div>
      </div>
    </div>
</div>
