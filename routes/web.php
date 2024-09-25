<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CupController;
use App\Http\Controllers\ListaopcioneController;
use App\Http\Controllers\PersonaController;


Route::get('/', function () {
    return view('Welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cups', CupController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cups', CupController::class);
Route::resource('listaopciones', ListaopcioneController::class);
Route::resource('personas', PersonaController::class);

