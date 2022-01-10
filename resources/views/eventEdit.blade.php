@extends('layouts.headHTML')

    @section('EventCreate')
    <div class="album py-5 bg-light">
      <div class="container">
        <form action="{{route('events.update', ['id' => $event->id])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="exampleFormControlInput1">TITLE</label>
            <input type="text" value="{{$event->title}}" name="title" class="form-control" id="exampleFormControlInput1" >
          </div>

          {{-- <div class="form-group">
            <label for="exampleFormControlInput2">IMAGE URL</label>
            <input type="url" value="{{$event->image}}" name="image" class="form-control" id="exampleFormControlInput2"  >
          </div> --}}

          <div class="form-group d-flex flex-row align-items-center mb-5">
            <label for="ImgURL" class="me-3 text-white">Image:  </label>
            
            {{-- <input name='image' type="url" class="form-control" id="ImgURL" > --}}
            <input type="file" name="image" id="" accept="image/*">
            
            @error('image')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
          </div>


          
          <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>

        </form>

      </div>
    </div>
    @endsection


