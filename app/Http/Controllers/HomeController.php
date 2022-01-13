<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
        $events->addStudent(auth()->user()->id);

        $list = [];
        $user_id = Auth()->user()->id;

        $allowEventsList = DB::table('students')->where('user_id', $user_id)->get();

        foreach ($allowEventsList as $itemAllowEvent) {
            $id = $itemAllowEvent->events_id;
            $x = Events::where('id', $id)->get();
            array_push($list, $x);
        }

        return redirect('home');
    }

    
}
