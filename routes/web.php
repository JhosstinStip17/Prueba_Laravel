<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PlantillaController;
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


// rutas de club

Route::get('/clubes', [ClubController::class, 'index'])->name('clubes.index');
Route::get('/clubes/create', [ClubController::class, 'create'])->name('clubes.create');
route::post('/clubes', [ClubController::class, 'store'])->name('clubes.store');
// Route::delete('clubes/{id}',ClubController::class, function ($id) {});


// Rutas de Plantilla
Route::get('plantilla', [PlantillaController::class, 'index'])->name('plantilla.index');
Route::get('plantilla/create', [PlantillaController::class, 'create'])->name('plantilla.create');
Route::post('plantilla', [PlantillaController::class, 'store'])->name('plantilla.store');

// Rutas de Jugador
Route::get('plantilla', [PlantillaController::class, 'index'])->name('plantilla.index');
Route::get('plantilla/create', [PlantillaController::class, 'create'])->name('plantilla.create');
Route::get('plantilla', [PlantillaController::class, 'index'])->name('plantilla.index');
Route::get('plantilla/create', [PlantillaController::class, 'create'])->name('plantilla.create');
Route::post('plantilla', [PlantillaController::class, 'store'])->name('plantilla.store');

Route::get('jugador', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('jugador/create', [JugadorController::class, 'create'])->name('jugador.create');
Route::post('jugador', [JugadorController::class, 'store'])->name('jugador.store');
