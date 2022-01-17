<?php

namespace App\Http\Controllers;

use App\Mail\SubscribingEvent;
use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function allowEvent($id) // lo verde identifica que el parametro encuentra relacion con un model existente con el mismo nombre
    {   
        $event = Events::find($id);
        $user = Auth::user();
        $myEventsList = $user->myJoinedEvents;
        if($myEventsList->contains($event)) return redirect('home');
        
        $event->addStudent($user->id);
        Mail::to($user->email)->send(new SubscribingEvent($user, $event));
        
        return redirect('home');
    }

    
}
