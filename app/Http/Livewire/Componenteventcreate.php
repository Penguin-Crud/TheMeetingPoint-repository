<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Componenteventcreate extends Component
{
    public $title;
    public $description;
    public $people;
    public $date;
    public $time;

    use WithFileUploads;
    public $image;

    public function photoPreview()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    // public function render()
    // {
    //     return view('livewire.articles');
    // }
}
