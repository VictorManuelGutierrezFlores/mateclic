<?php

/**
 * CALLING QUESTIONS&ANSWERS CONTROLLER
 */

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\QuestnAnswController;
use Illuminate\Support\Facades\Route;
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
    return view('index');
})->name('home');

Route::get('/nuevojugador', function(){
    return view('nuevojugador');
});

Route::post('/nuevojugador',[PlayerController::class,'create'])->name('jugando.create');

Route::get('/jugando', function(){
    return view('jugando');
})->name('jugando');

Route::resource('questn_answs', QuestnAnswController::class);
Route::resource('ResultsController', ResultsController::class);
Route::resource('PlayerController', PlayerController::class);
