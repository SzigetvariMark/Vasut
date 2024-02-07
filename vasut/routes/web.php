<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainsController;
use App\Http\Controllers\TimeController;
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

Route::get('/', function () {
    return view('layout');
});

Route::resource('trains', TrainsController::class);
Route::resource('time', TimeController::class);



Route::get('/time', [TimeController::class, 'index'])->name('time.index');
Route::post('/time/calculate', [TimeController::class, 'calculateTime'])->name('time.calculate');
Route::view('/time/result', 'time.result')->name('time.result');