<?php

/**
 * CALLING QUESTIONS&ANSWERS CONTROLLER
 */

use App\Http\Controllers\QuizController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultsController;
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


Route::get('/seleccion_nombre', function(){
    return view('seleccion_nombre');
});

Route::get('/nuevojugador', function(){
    return view('nuevojugador');
})->name('nuevojugador');

Route::post('/nuevojugador',[PlayerController::class,'create'])->name('jugando.create');

Route::get('/seleccion_grado', function(){
    return view('seleccion_grado');
})->name('seleccion_grado');

Route::get('/inicia_juego_primaria', function(){
    return view('inicia_juego_primaria');
})->name('inicia_juego_primaria');

Route::get('/inicia_juego_secundaria', function(){
    return view('inicia_juego_secundaria');
})->name('inicia_juego_secundaria');

Route::get('/inicia_juego_preparatoria', function(){
    return view('inicia_juego_preparatoria');
})->name('inicia_juego_preparatoria');

Route::resource('quizzes', QuizController::class);
Route::resource('ResultsController', ResultsController::class);
Route::resource('PlayerController', PlayerController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('autorizado');