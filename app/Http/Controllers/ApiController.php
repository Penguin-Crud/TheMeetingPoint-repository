<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiGetEvent(Events $event)
    {
        return $event;
    }

    public function paginateEvents()
    {
       
        return Events::paginate(3);
    }
}
