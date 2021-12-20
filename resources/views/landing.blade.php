@extends("layouts.headHTML")

  
@section('main')
    <div>
     <x-slider :events='$events'/>
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($events as $itemEvent)
            <x-eventCard :itemEvent='$itemEvent'/>
          @endforeach
        </div>
      </div>
    </div>
@endsection