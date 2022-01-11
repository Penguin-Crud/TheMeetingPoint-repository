<div>
  <div class="album py-5 bg-light">
    <div class="container">

      <form action="{{route('events.update', ['id' => $event->id ])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="exampleFormControlInput1">TITLE</label>
          <input type="text" value="{{$event->title}}" name="title" class="form-control" id="exampleFormControlInput1" >
        </div>

        <div id="inputImagee" class="form-group d-flex flex-row align-items-center mb-5">
          <label for="ImgURL" class="me-3 text-white">Image:  </label>
          
          <input type="file"  name="image" id="" accept="image/*">
          
          @error('image')
              <small class="text-danger"> {{ $message }} </small>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>

      </form>

    </div>
  </div>
</div>