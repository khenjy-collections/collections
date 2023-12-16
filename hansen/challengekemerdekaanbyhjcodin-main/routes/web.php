<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ChallengeController;

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

Route::get('/', [BerandaController::class , 'index']);
Route::get('/daftar', [RegisterController::class , 'index']);
Route::post('/daftar', [RegisterController::class , 'regist'])->name('regist');
Route::get('/masuk', [LoginController::class , 'index']);
Route::post('/masuk' ,[LoginController::class , 'login'])->name('login');
Route::get('/challenge', [ChallengeController::class , 'index']);
Route::get('/create', [ChallengeController::class , 'create']);
Route::post('/challenge', [ChallengeController::class , 'submit']);


