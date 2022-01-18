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
    
    public function allowEvent($id)
    {   
        $event = Events::find($id);
        $user = Auth::user();
        if(!$event->addStudent($user->id)) return redirect('home');
        
        Mail::to($user->email)->send(new SubscribingEvent($user, $event));//->queue
        
        return redirect('home');
    }

}
