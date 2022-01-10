@extends("layouts.headHTML")

  
@section('main')
    <div>
     <x-slider :events='$highlightedEvents'/>
    </div>
    <div style="width:100%">
      <h2 style="color:white ;font-size: 3em; display:flex; justify-content: center">Events</h2>
    </div>
    <div class="album py-5">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($events as $itemEvent)
            <x-eventCard :itemEvent='$itemEvent'/>
          @endforeach
        </div>
      </div>
    </div>
@endsection