<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class , 'index']);
Route::get('/delete/{id}', [StudentController::class , 'delete'])->name('student.delete');
// Route::get('/show/{id}', [StudentController::class , 'show'])->name('student.show');
Route::post('/store' , [StudentController::class , 'store'])->name('student.store');
Route::get('/deleteall', [StudentController::class , 'deleteall']);
Route::get('/create', [StudentController::class , 'create']);