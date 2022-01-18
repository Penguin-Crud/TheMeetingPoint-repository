<?php

namespace App\Http\Controllers;

use App\Mail\SubscribingEvent;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;
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
    
    public function allowEvent(Events $event)
    {   
        // $event = Events::find($id);
        $user = Auth::user();
        if(!$event->addStudent($user->id)) return redirect('home');
        
     //   Mail::to($user->email)->send(new SubscribingEvent($user, $event));//->queue
        
        return redirect('home');
    }

}
