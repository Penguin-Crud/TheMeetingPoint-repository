<div>
  <div class="album">

    <h2 style="color:white ;font-size: 3em;" class="d-flex justify-content-center mt-3">{{ __('Edit') }}</h2>

    <div class="container d-flex justify-content-around mt-5">

      <div class="col-md-4">
        <div class="card">
         
          @if (!$image)
            photo preview:
            <img src="{{  $event->image  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
          @else
            photo update:
            {{-- @php
                dd($url)
            @endphp --}}
            <img src="{{  $image  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
          @endif

          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="card-text" style="font-weight:bold">{{  $title  }}</p>

              <div id="datee / timee" class="d-flex justify-content-between">
                @php
                  $color='text-dark';
                  $expDate=2022-11-11; // esto es una resta el punto de inflexion es el 2000
                  $expTime=12;

                  if ($date>=$expDate) {
                      $color='text-danger';
                      $time>$expTime ? $color='text-danger' : $color='text-dark';
                    }

                  // if ($date<$expdate) {$color='text-dark';}

                  // $date>$expDate ? $color='text-danger' : ($time>$expTime ? $color='text-danger' : $color='text-dark');
                  
                @endphp
                <p class="card-text {{$color}}">{{  $date  }}</p>
                <p class="card-text ms-2{{$color}}">{{  $time  }}</p>
              </div>
            </div>

            <p class="card-text">{{  $description }}</p>

            <div id="peoplee" class="d-flex justify-content-between">
              <button class="bg-warning text-white">Allow</button>
              @php
                  $maxPeople = $people;
                  $peopleSubs=23;// tendria que ser un contador dinamico (video sergi)
                  // if ($people>$maxpeople) {$color='text-danger';}
                  // if ($people<$maxpeople) {$color='text-dark';}

                  $peopleSubs>=$maxPeople ? $color='text-danger' : $color='text-dark';
              @endphp
              <p class="card-text {{$color}}" >persons :  {{$event->countStudents()}} / {{  $maxPeople  }}</p>
            </div> 
    
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="btn-group mt-2">
                  <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button> 
                  <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>
              </div> 
            </div>
    
          </div>
        </div>
      </div>
      
      <div class="rounded-3" style="background-color: rgba(255, 255, 255, 0.918)">
        <form action="{{route('events.update', ['id' => $event->id ])}}" method="POST" enctype="multipart/form-data" class="row justify-content-center flex-column m-4">
          @csrf
          @method('PUT')
          
          <div id="inputImagee" class="form-group d-flex flex-row align-items-center mb-5">
            <label for="ImgURL" class="me-3 text">Image:  </label>
            
            <input  wire:model="image" type="file" name="image" class="text" accept="image/*">
            
            @error('image')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
          </div>

          <div class="form-group d-flex flex-row justify-content-center mb-2">
            <label for="title" class="me-5 text">Title:  </label>
            <div class="col-md-10">
              <input wire:model="title" type="text" value="{{$event->title}}" name="title" class="form-control border-dark border-1 ms-2" id="title" >
            </div>
          </div>
          <div class="form-group d-flex flex-row justify-content-center mb-2">
            <label for="description" class="me-3 text">Description:  </label>
            <div class="col-md-10">
              <input wire:model="description" name='description' value="{{$event->description}}" type="text" class="form-control border-dark border-1" id="description" >
            </div>
          </div>

          <div class="form-group d-flex flex-row justify-content-center mt-4 mb-2">
            <label for="people" class="me-3 text">MaxPeople:  </label>
            <div class="col-md-10">
              <input wire:model="people" name='people' value="{{$event->people}}" type="text" class="form-control border-dark border-1" id="people" >
            </div>
          </div>
          <div class="form-group d-flex flex-row justify-content-center mb-2">
            <label for="date" class="me-1 text">aaaa/dd/mm:  </label>
            <div class="col-md-10">
              <input wire:model="date" name='date' value="{{$event->date}}" type="text" class="form-control border-dark border-1" id="date" >
            </div>
          </div>
          <div class="form-group d-flex flex-row justify-content-center mb-2">
            <label for="time" class="me-5 text">hh:mm:  </label>
            <div class="col-md-10">
              <input wire:model="time" name='time' value="{{$event->time}}" type="text" class="form-control border-dark border-1" id="time" >
            </div>
          </div>

          <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-warning border-dark border-1">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  {{-- datetime-local --}}
</div>

