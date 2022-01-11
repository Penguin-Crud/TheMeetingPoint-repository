<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Componenteventedit extends Component
{
    public $event;
    public $title;
    public $url;
    use WithFileUploads;
    public $image;
    
    public function mount()
    {
        $this->title = $this->event->title;
        $this->image = $this->url;
    }
    public function photoPreview()
    {
        $this->validate([
            'image' => 'image|max:2048',
        ]);
        $imagenes = $this->image->file('image')->store('public/imgUp');
        $this->url = Storage::url($imagenes);
    }
    public function image()
    {
        
    }
    
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




}
