@extends('layouts.headHTML')

    @section('EventCreate')
    <div class="album py-5 bg-light">
      <div class="container">
        <form action="{{route('events.update', ['id' => $event->id])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlInput1">TITLE</label>
            <input type="text" value="{{$event->title}}" name="title" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput2">IMAGE URL</label>
            <input type="url" value="{{$event->image}}" name="image" class="form-control" id="exampleFormControlInput2"  >
          </div>
          <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
        <form/>
      </div>
    </div>
    @endsection


