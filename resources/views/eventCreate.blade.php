@extends('layouts.headHTML')

    @section('EventCreate')

    <div class="album py-5">
      <div class="container">
        <form action="{{  route('events.store')  }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">TITLE</label>
            <input name='title' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">IMAGE URL</label>
            <input name='image' type="url" class="form-control" id="exampleInputPassword1" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
        
    @endsection


