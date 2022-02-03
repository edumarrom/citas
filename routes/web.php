<?php

use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

/* ¿¿Por qué group function?? */
Route::middleware(['auth'])->group(function () {
    Route::get('/citas', [CitaController::class, 'index'])
        ->middleware(['auth'])->name('ver-citas');

    Route::get('/cita/create', [CitaController::class, 'create'])
        ->middleware(['auth'])->name('crear-cita');

    Route::get('/cita/create/{compania}', [CitaController::class, 'createEspecialidad'])
        ->name('crear-cita-especialidad');
});
