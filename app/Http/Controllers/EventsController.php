<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeventsRequest;
use App\Http\Requests\UpdateeventsRequest;
use App\Models\Events;
use App\Models\User;
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
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        /*$data = [
            'title' => $request->title,
            'image' => $request->image,
            'user_id' =>Auth::user()->id,
        ];

        Events::create($data);
        return redirect(route('landing'));*/
        
        $imagenes = $request->file('image')->store('public/imgUp');
        $url = Storage::url($imagenes);
        
        Events::create([
            'image' => $url,
            'title' => $request->title,
            'user_id' =>Auth::user()->id,
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
        if (! Auth::user()->isAdmin()){
            return back();
        };
        return view('eventEdit', ['event'=>$eventToEdit]);
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
        $data = [
            'title' => $request->title,
            'image' => $request->image,
            'user_id' =>Auth::user()->id,
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
        //Auth::user()->isAdmin()
        if (Auth::id() != $eventToDelete->author->id){return back();};

        $eventToDelete->delete();
      
        return back();
    }
}