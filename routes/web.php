<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('Bienvenido');
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


