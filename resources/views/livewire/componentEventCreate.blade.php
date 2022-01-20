<div class="album">

    <h2 style="color:white ;font-size: 3em;" class="d-flex justify-content-center mt-3">{{ __('Create') }}</h2>

    <div class="container d-flex justify-content-around mt-5">
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
            </div>
        </div>


        <form action="{{  route('events.store')  }}" method="POST" enctype="multipart/form-data" class="d-flex justify-content-center flex-column">
            @csrf

            <div class="form-group d-flex flex-row align-items-center mb-5">
              <label for="ImgURL" class="me-3 text-white">Image:  </label>

              <input class="text-white" wire:model="image" type="file" name="image" id="" accept="image/*">

              @error('image')
                  <small class="text-danger"> {{ $message }} </small>
              @enderror

            </div>


            <div class="form-group d-flex flex-row align-items-center">
              <label for="title" class="me-3 text-white">Title:  </label>
              <input wire:model="title" name='title' type="text" class="form-control" id="title" >
            </div>
            <div class="form-group d-flex flex-row align-items-center mb-5">
              <label for="description" class="me-3 text-right  text-white">Description:  </label>
              <input wire:model="description" name='description' type="text" class="form-control" id="description" >
            </div>


            <div class="form-group d-flex flex-row align-items-center">
              <label for="people" class="me-3 text-white">MaxPeople:  </label>
              <input wire:model="people" name='people' type="text" class="form-control" id="people" >
            </div>
            <div class="form-group d-flex flex-row align-items-center">
              <label for="date" class="me-3  text-white">dd/mm/aa:  </label>
              <input wire:model="date" name='date' type="datetime-local" class="form-control" id="date" >
            </div>

            <div class="d-flex justify-content-center mt-4">
              <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>

</div>
