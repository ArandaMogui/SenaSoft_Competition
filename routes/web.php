<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CupController;
use App\Http\Controllers\ListaopcioneController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EpController;
use App\Http\Controllers\NiveleController;
use App\Http\Controllers\TarjeteroController;
use App\Http\Controllers\ProfesionaleController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\PruebasopcioneController;
use App\Http\Controllers\OrdeneController;
use App\Http\Controllers\ResultadoController;


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
Route::resource('eps', EpController::class);
Route::resource('niveles', NiveleController::class);
Route::resource('tarjeteros', TarjeteroController::class);
Route::resource('profesionales', ProfesionaleController::class);
Route::resource('documentos', DocumentoController::class);
Route::resource('grupos', GrupoController::class);
Route::resource('procedimientos', ProcedimientoController::class);
Route::resource('pruebas', PruebaController::class);
Route::resource('pruebasopciones', PruebasopcioneController::class);
Route::resource('ordenes', OrdeneController::class);
Route::resource('resultados', ResultadoController::class);


