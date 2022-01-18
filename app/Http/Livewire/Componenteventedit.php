<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Componenteventedit extends Component
{
    public $event;
    public $title;
    public $description;
    public $people;
    public $date;
    public $time;

    public $url;
    use WithFileUploads;
    public $image;
    
    public function mount()
    {
        $this->image = $this->url;

        $this->title = $this->event->title;
        $this->description = $this->event->description;
        $this->people = $this->event->people;
        $this->date = $this->event->date;
        $this->time = $this->event->time;

    }
    public function photoPreview()
    {
        $this->validate([
            'image' => 'image|max:2048',
        ]);
        $imagenes = $this->image->file('image')->store('public/imgUp');
        $this->url = Storage::url($imagenes);
    }
    
    // public function render()
    // {
    //     return view('livewire.componentEventEdit', ['event'=> $this->eventToEdit]);
    // }
}
