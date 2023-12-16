<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [pegawaiController::class , 'index']);

Route::get('/daftar' , function() {
    return view('daftar');
});

// index
Route::post('/daftar', [pegawaiController::class , 'regist']);
Route::get('/editData/{id}', [pegawaiController::class , 'editData']);
Route::post('/updateData/{id}', [pegawaiController::class , 'updateData']);
Route::get('/delete/{id}', [pegawaiController::class , 'delete']);

// Login user
Route::get('/login',[LoginController::class , 'index']);
Route::post('/login',[LoginController::class , 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);

// Register a new user
Route::get('/register',[RegisterController::class , 'index']);
Route::post('/register',[RegisterController::class , 'store']);



Route::get('/about', function() {
    return view('about');
});
