<div class="album">
    <h2 style="color:white ;font-size: 3em;" class="d-flex justify-content-center mt-3">{{ __('Create') }}</h2>
    <div class="container d-flex justify-content-around mt-5">
<<<<<<< HEAD
      <div class="col-md-4">
        <div class="card">
          @if ($image)
            photo preview:
            <img src="{{  $image->temporaryUrl()  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
          @endif
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="card-text" style="font-weight:bold">{{  $title  }}</p>
              <div class="d-flex justify-content-between">
                @php
                  $expdate=2022-12-12;
                  if ($date>$expdate) {$color='text-danger';}
                  if ($date<$expdate) {$color='text-dark';}
                @endphp
                <p class="card-text {{$color}}">{{  $date  }}</p>
                <p class="card-text ms-2{{$color}}">{{  $time  }}</p>
              </div>
            </div>
            <p class="card-text">{{  $description }}</p>
            <div class="d-flex justify-content-between">
              <button class="bg-warning text-white">Allow</button>
              @php
                  $maxpeople=23;
                  if ($people>$maxpeople) {$color='text-danger';}
                  if ($people<$maxpeople) {$color='text-dark';}
              @endphp
              <p class="card-text" >persons : {{$maxpeople}} / <p class="{{$color}}">{{  $people  }}</p></p>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="btn-group mt-2">
                  <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>
              </div>
            </div>
          </div>
=======
        <div class="col-md-4">
            <div class="card">
              @if ($image)
                photo preview:
                <img src="{{  $image->temporaryUrl()  }}" class="bd-placeholder-img card-img-top" width="100%" height="225"  alt="No funciona">
              @endif
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="card-text" style="font-weight:bold">{{  $title  }}</p>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{  $date  }}</p>
                    </div>
                </div>
                <p class="card-text">{{  $description }}</p>
                <div class="d-flex justify-content-between">
                  <button class="bg-warning text-white">Allow</button>
                  <p class="card-text" >persons : 0 / {{  $people  }}</p>
                </div>

                <div class="d-flex justify-content-center align-items-center flex-column">


                  <div class="btn-group mt-2">

                      <button type="submit" class="btn btn-sm btn-outline-secondary text-white bg-danger w-100">Delete</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary text-white w-100" style="background-color: blue">Edit</button>

                  </div>

                </div>



            </div>


>>>>>>> 22d69f65c94c111f25c3a5203fb307237cddf4ed
        </div>
      </div>

      <div class="rounded-3" style="background-color: rgba(255, 255, 255, 0.918)">
        <form action="{{  route('events.store')  }}" method="POST" enctype="multipart/form-data" class="row justify-content-center flex-column m-4">
            @csrf

            <div class="form-group d-flex flex-row align-items-center mb-5">
              <label for="ImgURL" class="me-3 text">Image:  </label>
<<<<<<< HEAD
     
              <input class="text-white" wire:model="image" type="file" name="image" id="" accept="image/*">
=======

              <input class="text" wire:model="image" type="file" name="image" id="" accept="image/*">
>>>>>>> 22d69f65c94c111f25c3a5203fb307237cddf4ed

              @error('image')
                  <small class="text-danger"> {{ $message }} </small>
              @enderror

            </div>


            <div class="form-group d-flex flex-row justify-content-center mb-2">
              <label for="title" class="me-5 text">Title:  </label>
              <div class="col-md-10">
                <input wire:model="title" name='title' type="text" class="form-control border-dark border-1 ms-2" id="title" >
              </div>
            </div>
            <div class="form-group d-flex flex-row justify-content-center mb-2">
              <label for="description" class="me-3 text">Description:  </label>
              <div class="col-md-10">
                <input wire:model="description" name='description' type="text" class="form-control border-dark border-1" id="description" >
              </div>
<<<<<<< HEAD
            </div>  
            <div class="form-group d-flex flex-row justify-content-center mb-2">
=======
            </div>


            <div class="form-group d-flex flex-row align-items-center">
>>>>>>> 22d69f65c94c111f25c3a5203fb307237cddf4ed
              <label for="people" class="me-3 text">MaxPeople:  </label>
              <input wire:model="people" name='people' type="text" class="form-control" id="people" >
            </div>
            <div class="form-group d-flex flex-row align-items-center">
              <label for="date" class="me-3  text">dd/mm/aa:  </label>
<<<<<<< HEAD
              <div class="col-md-10">
                <input wire:model="date" name='date' type="datetime-local" class="form-control border-dark border-1" id="date" >
              </div>
            </div>  
=======
              <input wire:model="date" name='date' type="datetime-local" class="form-control" id="date" >
            </div>

>>>>>>> 22d69f65c94c111f25c3a5203fb307237cddf4ed
            <div class="d-flex justify-content-center mt-4">
              <button type="submit" class="btn btn-warning border-dark border-1">Submit</button>
            </div>
        </form>
      </div>
    </div>

</div>
