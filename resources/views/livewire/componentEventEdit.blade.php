<div>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="col">
        <div class="card shadow-sm w-50">
         
          @if (!$image)
            photo preview:
            <img src="{{  $event->image  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
          @else
            photo update:
            @php
                dd($url)
            @endphp
            <img src="{{  $image  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
          @endif

          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="card-text" style="font-weight:bold">{{  $title  }}</p>
              {{-- <div class="d-flex justify-content-between">
                @php
                  $expdate=2022-12-12;
                  if ($date>$expdate) {$color='text-danger';}
                  if ($date<$expdate) {$color='text-dark';}
                @endphp
                <p class="card-text {{$color}}">{{  $date  }}</p>
                <p class="card-text ms-2{{$color}}">{{  $time  }}</p>
              </div> --}}
            </div>
            <p class="card-text">{{  $event->description }}</p>
            {{-- <div class="d-flex justify-content-between">
              <button class="bg-warning text-white">Allow</button>
              @php
                  $maxpeople=23;
                  if ($people>$maxpeople) {$color='text-danger';}
                  if ($people<$maxpeople) {$color='text-dark';}
              @endphp
              <p class="card-text" >persons : {{$maxpeople}} / <p class="{{$color}}">{{  $people  }}</p></p>
            </div> --}}
    
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="btn-group mt-2">
                  <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button> 
                  <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>
              </div> 
            </div>
    
          </div>
        </div>
      </div>
      

      <form action="{{route('events.update', ['id' => $event->id ])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="exampleFormControlInput1">TITLE</label>
          <input wire:model="title" type="text" value="{{$event->title}}" name="title" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div id="inputImagee" class="form-group d-flex flex-row align-items-center mb-5">
          <label for="ImgURL" class="me-3 text-white">Image:  </label>
          
          <input  wire:model="image" type="file" name="image" id="" accept="image/*">
          
          @error('image')
              <small class="text-danger"> {{ $message }} </small>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>

      </form>

    </div>
  </div>
</div>