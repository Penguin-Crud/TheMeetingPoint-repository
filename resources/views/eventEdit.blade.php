@extends('layouts.headHTML')

  @section('EventCreate')
    @livewire('componenteventedit', ['event' => $event])
  @endsection


