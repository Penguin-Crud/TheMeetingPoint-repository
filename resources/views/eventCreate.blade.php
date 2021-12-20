@extends('layouts.headHTML')

    @section('EventCreate')

    <div class="album py-5 bg-light">
      <div class="container">
        <form action="{{  route('events.store')  }}" method="POST">
          @csrf
          <div class="form-group d-flex flex-row align-items-center mb-5">
            <label for="ImgURL" class="me-3">ImgURL:  </label>
            <input name='image' type="url" class="form-control" id="ImgURL" >
          </div>


          <div class="form-group d-flex flex-row align-items-center">
            <label for="title" class="me-3">Title:  </label>
            <input name='title' type="text" class="form-control" id="title" >
          </div>
          <div class="form-group d-flex flex-row align-items-center mb-5">
            <label for="description" class="me-3 text-right ">Description:  </label>
            <input name='description' type="text" class="form-control" id="description" >
          </div>


          <div class="form-group d-flex flex-row align-items-center">
            <label for="people" class="me-3">MaxPeople:  </label>
            <input name='people' type="text" class="form-control" id="people" >
          </div>
          <div class="form-group d-flex flex-row align-items-center">
            <label for="date" class="me-3">dd/mm/aa:  </label>
            <input name='date' type="text" class="form-control" id="date" >
          </div>
          <div class="form-group d-flex flex-row align-items-center">
            <label for="people" class="me-3">Time:  </label>
            <input name='people' type="text" class="form-control" id="people" >
          </div>
          <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      </div>
    </div>
        
    @endsection


