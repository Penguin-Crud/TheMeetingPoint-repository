<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;

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

Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.destroy');