<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\GenMPersonaController;
use App\Http\Controllers\GenPListaOpcioneController;
use App\Http\Controllers\GenPEpController;
use App\Http\Controllers\FacPNiveleController;
use App\Http\Controllers\FacPProfesionaleController;
use App\Http\Controllers\FacPCupController;
use App\Http\Controllers\GenPDocumentoController;
use App\Http\Controllers\LabPGrupoController;
use App\Http\Controllers\LabPProcedimientoController;
use App\Http\Controllers\LabPPruebaController;
use App\Http\Controllers\LabPPruebasOpcioneController;
use App\Http\Controllers\LabMOrdeneController;
use App\Http\Controllers\LabMOrdenResultadoController;
use App\Http\Controllers\FacMTarjeteroController;



Route::get('/', function () {
    return view('Welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('gen_m_persona', GenMPersonaController::class);
Route::resource('gen_m_opcion', GenPListaOpcioneController::class);
Route::resource('gen_m_eps', GenPEpController::class);
Route::resource('gen_m_nivel', FacPNiveleController::class);
Route::resource('gen_m_profesional', FacPProfesionaleController::class);
Route::resource('gen_m_cup', FacPCupController::class);
Route::resource('gen_m_documento', GenPDocumentoController::class);
Route::resource('gen_m_grupos', LabPGrupoController::class);
Route::resource('gen_m_procedimientos', LabPProcedimientoController::class);
Route::resource('gen_m_pruebas', LabPPruebaController::class);
Route::resource('gen_m_pruebas_opciones', LabPPruebasOpcioneController::class);
Route::resource('gen_m_orden', LabMOrdeneController::class);
Route::resource('gen_m_orden_resultados', LabMOrdenResultadoController::class);
Route::resource('gen_m_tarjetero', FacMTarjeteroController::class);
