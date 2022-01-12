<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function allowEvent(Events $events) // lo verde identifica que el parametro encuentra relacion con un model existente con el mismo nombre
    {
        // dd(auth()->user()->id);
        dd($events);
        // $eventToAllow = Events::findOrFail($id);
        $events->addStudent(auth()->user()->id);

        return redirect('home');
    }
}
