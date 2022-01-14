<?php

namespace App\Http\Livewire;

use App\Models\Events;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use mysqli;

class HomeMyEventsList extends Component
{
    public $myEvents;
    

    public function mount() {
        $this->myEvents = Auth::user()->myJoinedEvents;
        // $this->myEvents = Events::all();
    }
    public function render()
    {
        return view('livewire.home-my-events-list');
    }

    public function detach($id)
    {
        $unsubMyEvent = Events::find($id);
        $unsubMyEvent->removeStudent(auth()->user()->id);

        $this->myEvents = Auth::user()->myJoinedEvents;

        // dd("hello");
    }
}
