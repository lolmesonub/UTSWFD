<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\TicketsController;

Route::get('/', function () {
    return redirect()->route('flights.index');
});

Route::resource('flights', FlightsController::class);
Route::resource('tickets', TicketsController::class);
