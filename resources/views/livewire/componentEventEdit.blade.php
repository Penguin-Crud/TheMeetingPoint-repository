<div>
  <div class="album py-5">
    <div class="container d-flex jutify-content-around">

      <div class="col">
        <div class="card shadow-sm w-50">
         
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
              <p class="card-text {{$color}}" >persons : {{$peopleSubs}} / {{  $maxPeople  }}</p>
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
      

      <form action="{{route('events.update', ['id' => $event->id ])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div id="inputImagee" class="form-group d-flex flex-row align-items-center mb-5">
          <label for="ImgURL" class="me-3 text-white">Image:  </label>
          
          <input  wire:model="image" type="file" name="image" class="text-white" accept="image/*">
          
          @error('image')
              <small class="text-danger"> {{ $message }} </small>
          @enderror
        </div>

        <div class="form-group d-flex flex-row align-items-center">
          <label for="title" class="me-3 text-right text-white">TITLE: </label>
          <input wire:model="title" type="text" value="{{$event->title}}" name="title" class="form-control" id="title" >
        </div>
        <div class="form-group d-flex flex-row align-items-center mb-3">
          <label for="description" class="me-3 text-right text-white">Description:  </label>
          <input wire:model="description" name='description' value="{{$event->description}}" type="text" class="form-control" id="description" >
        </div>

        <div class="form-group d-flex flex-row align-items-center">
          <label for="people" class="me-3 text-right text-white">MaxPeople:  </label>
          <input wire:model="people" name='people' value="{{$event->people}}" type="text" class="form-control" id="people" >
        </div>
        <div class="form-group d-flex flex-row align-items-center">
          <label for="date" class="me-3 text-right text-white">aaaa/dd/mm:  </label>
          <input wire:model="date" name='date' value="{{$event->date}}" type="text" class="form-control" id="date" >
        </div>
        <div class="form-group d-flex flex-row align-items-center">
          <label for="time" class="me-3 text-right text-white">hh:mm:  </label>
          <input wire:model="time" name='time' value="{{$event->time}}" type="text" class="form-control" id="time" >
        </div>

        <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>

      </form>

    </div>
  </div>
</div>