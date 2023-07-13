<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*

|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:estudiante'])->group(function () {
    Route::get('/estudiante/dashboard', [App\Http\Controllers\EstudianteController::class, 'dashboard'])->name('estudiante.dashboard');
   
});


Route::middleware(['auth', 'role:docente'])->group(function () {
    Route::get('/docente/dashboard', [App\Http\Controllers\DocenteController::class, 'dashboard'])->name('docente.dashboard');
   
});

Route::middleware(['auth', 'role:administrativo'])->group(function () {
    Route::get('/administrativo/dashboard', [App\Http\Controllers\AdministrativoController::class, 'dashboard'])->name('administrativo.dashboard');
    
});

/*Ruta de matricula estudiante*/
Route::get('/matricula', [App\Http\Controllers\MatriculaController::class, 'create'])->name('matricula.create')->middleware('auth');

Route::get('/matricula/confirmation', [App\Http\Controllers\MatriculaController::class, 'confirmation'])->name('matricula.confirmation');





