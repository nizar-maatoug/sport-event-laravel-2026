<?php

use App\Http\Controllers\EventSportifController;
use Illuminate\Support\Facades\Route;


Route::get('/events', [EventSportifController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventSportifController::class, 'create'])->name('events.create');
Route::post('/events', [EventSportifController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventSportifController::class, 'show'])->name('events.show');
Route::delete('/events/{id}', [EventSportifController::class, 'destroy'])->name('events.destroy');
