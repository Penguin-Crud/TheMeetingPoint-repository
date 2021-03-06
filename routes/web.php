<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Componenteventedit;
use App\Http\Controllers\SliderController;
use App\Http\Livewire\HomeMyEventsList;
use App\Mail\NotificationsMailable;
use App\Mail\SubscribingEvent;
use App\Models\Events;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [EventsController::class, 'index'])->name('landing');

Route::get('/events/create', [EventsController::class, 'create'])->name('events.create')->middleware('auth');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::delete('/myevents/{id}', [HomeMyEventsList::class, 'detach'])->name('myevents.destroy')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::post('/allowevent/{event}', [HomeController::class, 'allowEvent'])->name('allowevent')->middleware('auth');
Route::post('/allowevent/{id}', [HomeController::class, 'allowEvent'])->name('allowevent')->middleware('auth');

Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.destroy')->middleware('auth');

Route::get('events/highlight/{id}', [SliderController::class, 'toggleHighlightSlider'])->name('events.highlight')->middleware('auth');

Route::get('/edit/{id}', [EventsController::class, 'edit'])->name('events.edit')->middleware('auth');
// Route::get('/edit/{id}', [Componenteventedit::class, 'edit'])->name('events.edit')->middleware('auth');


Route::put('/update/{id}', [EventsController::class, 'update'])->name('events.update')->middleware('auth');                            

// Route::get('/notify/{eventId}', function($eventId)
// {
//     $user = Auth::user();
//     $event = Events::find($eventId);
//     $subscribeEvent = new SubscribingEvent($user, $event);
//     Mail::to($user->email)->send($subscribeEvent);

//     return $subscribeEvent->render();
// })->middleware('auth');
Route::get('api/event/{event}', [ApiController::class, 'apiGetEvent'])->name('events.api.item');
Route::get('api/events', [ApiController::class, 'paginateEvents'])->name('events.api.paginate');

Route::get('/date', [EventsController::class, 'date'])->name('events.date')->middleware('auth');                            
