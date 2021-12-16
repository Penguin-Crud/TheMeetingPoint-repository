@props([‘events’])
<div id=“carouselExampleControls” class=“carousel slide” data-bs-ride=“carousel”>
    <div class=“carousel-inner”>
      <div class=“carousel-item active”>
        <img src=“{{$events[0]->image}}” class=“d-block w-100” >
      </div>
      @for ($i = 1; $i < count($events); $i++)
        <div class=“carousel-item”>
          <img src=“{{$events[$i]->image}}” class=“d-block w-100" >
        </div>
      @endfor
    </div>
    <button class=“carousel-control-prev” type=“button” data-bs-target=“#carouselExampleControls” data-bs-slide=“prev”>
      <span class=“carousel-control-prev-icon” aria-hidden=“true”></span>
      <span class=“visually-hidden”>Previous</span>
    </button>
    <button class=“carousel-control-next” type=“button” data-bs-target=“#carouselExampleControls” data-bs-slide=“next”>
      <span class=“carousel-control-next-icon” aria-hidden=“true”></span>
      <span class=“visually-hidden”>Next</span>
    </button>
  </div>