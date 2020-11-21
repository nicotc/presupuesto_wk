<?php

use App\Http\Livewire\PresupuestoTable;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('PresupuestosStatus', 'PresupuestosStatusController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', PresupuestoTable::class )->name('dashboard');


