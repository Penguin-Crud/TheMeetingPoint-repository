<?php

namespace App\Http\Controllers;

use App\Models\Events;

class SliderController extends Controller
{
    public function toggleHighlightSlider($idEvent)
    {
        $event = Events::find($idEvent);
        $event->toggleHighlight();
        return back();
    }
}
