<?php

namespace App\Http\Livewire;

use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeMyEventsList extends Component
{
    public $myEvents;

    public function mount() 
    {
        $this->myEvents = Auth::user()->myJoinedEvents;
    }

    public function detach($id)
    {
        $unsubMyEvent = Events::find($id);
        $unsubMyEvent->removeStudent(auth()->user()->id);

        $this->myEvents = Auth::user()->myJoinedEvents;
    }
}
