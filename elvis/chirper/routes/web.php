<?php
 
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);
 
require __DIR__.'/auth.php';