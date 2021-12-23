@extends('layouts.headHTML')

    @section('EventCreate')

    <div class="album py-5">
      <div class="container">
        <form action="{{  route('events.store')  }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group d-flex flex-row align-items-center mb-5">
            <label for="ImgURL" class="me-3 text-white">ImgURL:  </label>
            {{-- <input name='image' type="url" class="form-control" id="ImgURL" > --}}
            
            <input type="file" name="image" id="" accept="image/*">
            
            @error('image')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
            
          </div>


         <div class="form-group d-flex flex-row align-items-center">
            <label for="title" class="me-3 text-white">Title:  </label>
            <input name='title' type="text" class="form-control" id="title" >
          </div>
          <div class="form-group d-flex flex-row align-items-center mb-5">
            <label for="description" class="me-3 text-right  text-white">Description:  </label>
            <input name='description' type="text" class="form-control" id="description" >
          </div>


          <div class="form-group d-flex flex-row align-items-center">
            <label for="people" class="me-3 text-white">MaxPeople:  </label>
            <input name='people' type="text" class="form-control" id="people" >
          </div>
          <div class="form-group d-flex flex-row align-items-center">
            <label for="date" class="me-3  text-white">dd/mm/aa:  </label>
            <input name='date' type="text" class="form-control" id="date" >
          </div>
          <div class="form-group d-flex flex-row align-items-center">
            <label for="people" class="me-3">Time:  </label>
            <input name='time' type="text" class="form-control" id="people" >
          </div> 
          <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      </div>
    </div>
      
    @endsection


