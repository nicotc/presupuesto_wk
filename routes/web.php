<?php

use App\Http\Livewire\PresupuestoTable;
use App\Http\Controllers\PresupuestosStatusController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return Redirect::to('/login');
});


Route::resource('PresupuestosStatus', PresupuestosStatusController::class);

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', PresupuestoTable::class )
->name('dashboard');


