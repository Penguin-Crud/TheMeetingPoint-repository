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

    use WithFileUploads;
    public $image;

    public function photoPreview()
    {
        $this->validate([
            'image' => 'image|max:2048',
        ]);
    }
}
