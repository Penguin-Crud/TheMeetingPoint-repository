<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    public function toggleHighlightSlider($idEvent)
    {
        //if(!Auth::user()->isAdmin) return back();
        
        $event = Events::find($idEvent);
        $event->toggleHighlight();
        return back();
    }
}
