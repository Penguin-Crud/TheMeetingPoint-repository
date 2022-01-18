<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Models\Events;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        $events = Events::orderBy('date', 'asc')->get();

        return view('landing', ['events' => $events, 'highlightedEvents' => Events::highlightedEvents()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreeventsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $imagenes = $request->file('image')->store('public/imgUp');
        $url = Storage::url($imagenes);

        Events::create([
            'image' => $url,
            'title' => $request->title,
            'description' => $request->description,
            'people' => $request->people,
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'time' => $request->time,
        ]);
        return redirect(route('landing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventToEdit = Events::findOrFail($id);

        if (!Auth::user()->isAdmin) {
            return back();
        };
        return view('eventEdit', ['event' => $eventToEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventsRequest  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $eventToUpdate = Events::findOrFail($id);
        if (!$request->image) {
            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'people' => $request->people,
                'date' => $request->date,
                'time' => $request->time,
                'user_id' => Auth::user()->id,
            ];
            $eventToUpdate->update($data);
            return redirect(route('landing'));
        }

        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $imagenes = $request->file('image')->store('public/imgUp');
        $url = Storage::url($imagenes);
        $data = [
            'title' => $request->title,
            'image' => $url,
            'description' => $request->description,
            'people' => $request->people,
            'date' => $request->date,
            'time' => $request->time,
            'user_id' => Auth::user()->id,
        ];
        $eventToUpdate->update($data);
        return redirect(route('landing'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Events::destroy($id);

        $eventToDelete = Events::findOrFail($id);
        //Auth::user()->isAdmin
        if (Auth::id() != $eventToDelete->author->id) {
            return back();
        };

        $eventToDelete->delete();

        return back();
    }

    public function date(Request $request)
    {

        // date_default_timezone_set('Europe/Madrid');
        // $fecha_actual = $request->date;
        // $time = strtotime($fecha_actual);
        // $fechaLocal = date("d-m-Y H:i:s", $time);
        // return [$fechaLocal, $request->title];

        $events = Events::orderBy('date', 'asc')->get();
        dd($events);
    }

    /* public function changeTextColor()
    {
        $maxpeople = 'people';
        $maxpeople = 23;
        $people = 0;

        if ($people >= $maxpeople) {
            $color = 'text-danger';
        } else if ($people <= $maxpeople) {
            $color = 'text-dark';
        }
        return view('/events/create', compact ('maxpeople', 'people'));
    }*/
}
