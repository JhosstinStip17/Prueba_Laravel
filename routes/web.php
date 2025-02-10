<?php

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


// Rutas de Plantilla
Route::get('plantilla',[PlantillaController::class, 'index'])->name('plantilla.index');
Route::get('plantilla/create',[PlantillaController::class, 'create'])->name('plantilla.create');