<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Http\Requests\StoreeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Models\Events as ModelsEvents;
use Illuminate\Http\Request;

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
        return view('landing', ['events'=> $events]);
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
        $data = [
            'title' => $request->title,
            'image' => $request->image,
        ];

        Events::create($data);
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
    public function edit(events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeventsRequest  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeventsRequest $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(events $events)
    {
        //
    }
}