<?php

namespace App\Http\Livewire;

use App\Models\Events;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeMyEventsList extends Component
{
    public $myEvents;
    public function __construct() {
        $this->myEvents = Auth::user()->myJoinedEvents;
        
        // $this->myEvents = Events::all();
    }
    public function render()
    {
        return view('livewire.home-my-events-list');
    }
}
