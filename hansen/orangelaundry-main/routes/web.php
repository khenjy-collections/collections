<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\OnlineOrderController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\BatamShuttleController;

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

// Route Home
Route::get('/', [HomeController::class , 'show']);

// Route Our Services
Route::get('/our-services', [OurServicesController::class, 'show']);

// Route Batam Shuttle Laundry
Route::get('/batam-shuttle', [BatamShuttleController::class , 'show']);

// Route Price 
Route::get('/price', [PriceController::class , 'show']);

// Route Order Online
Route::get('/online-order', [OnlineOrderController::class ,'show']);