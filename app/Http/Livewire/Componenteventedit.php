<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Componenteventedit extends Component
{
    public $eventToEdit = 'ADios';
    public $event;
    
    // public function edit($id)
    // {
    //     $this->eventToEdit = Events::findOrFail($id);
    //     if (! Auth::user()->isAdmin){
    //         return back();
    //     };
        
    //     //return view('componentEventEdit', ['event'=>$eventToEdit]); 
    // }
    
    // public function render()
    // {
    //     return view('livewire.componentEventEdit', ['event'=> $this->eventToEdit]);
    // }
    // public $id;
    // public $title;
    // public $description;
    // public $people;
    // public $date;
    // public $time;

    // use WithFileUploads;
    // public $image;

    // public function photoPreview()
    // {
    //     $this->validate([
    //         'image' => 'image|max:2048',
    //     ]);
    // }



}
