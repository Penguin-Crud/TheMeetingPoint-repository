@props(['events'])
<div id="carouselExampleControls" style="padding:5% 13%" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @if (!empty($events))
      <div class="carousel-item active">
        <img src="{{$events[0]->image}}" class="d-block w-100" alt="Highlighted event {{$events[0]->title}}">
      </div>
    @endif
    
    @for ($i = 1; $i < count($events); $i++)
    <div class="carousel-item" style="">
      <div>
      <img src="{{$events[$i]->image}}" class="d-block w-100" style="object-fit: cover; object-position: 100% 100%" alt="Highlighted event {{$events[$i]->title}}">
      </div>
    </div>
    @endfor

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
