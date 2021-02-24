<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\AlergiasController;
use App\Http\Controllers\AcudienteController;
use App\Http\Controllers\MenorController;

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
})->name('welcome');

// Cuidador routes
Route::get('cuidadores', [CuidadorController::class, 'index'])->name('cuidadores.index');
Route::get('cuidadores/create', [CuidadorController::class, 'create'])->name('cuidadores.create');
Route::post('cuidadores', [CuidadorController::class, 'store'])->name('cuidadores.store');
Route::get('cuidadores/{cuidador}', [CuidadorController::class, 'show'])->name('cuidadores.show');
Route::get('cuidadores/{cuidador}/edit', [CuidadorController::class, 'edit'])->name('cuidadores.edit');
Route::put('cuidadores/{cuidador}', [CuidadorController::class, 'update'])->name('cuidadores.update');
Route::delete('cuidadores/{cuidador}', [CuidadorController::class, 'destroy'])->name('cuidadores.destroy');
Route::post('cuidadores/search', [CuidadorController::class, 'search'])->name('cuidadores.search');
Route::get('cuidadores/not-found', [CuidadorController::class, 'not_found'])->name('cuidadores.not_found');
Route::get('cuidadores-list-pdf/', [CuidadorController::class, 'exportPdf'])->name('cuidadores.pdf');

// Menor routes
Route::get('menores', [MenorController::class, 'index'])->name('menores.index');
Route::get('menores/create', [MenorController::class, 'create'])->name('menores.create');
Route::post('menores', [MenorController::class, 'store'])->name('menores.store');
Route::get('menores/{menor}', [MenorController::class, 'show'])->name('menores.show');
Route::get('menores/{menor}/edit', [MenorController::class, 'edit'])->name('menores.edit');
Route::put('menores/{menor}', [MenorController::class, 'update'])->name('menores.update');
Route::delete('menores/{menor}', [MenorController::class, 'destroy'])->name('menores.destroy');
Route::post('menores/menor', [MenorController::class, 'search'])->name('menores.search');


// Acudientes routes
Route::get('acudientes', [AcudienteController::class, 'index'])->name('acudientes.index');
Route::get('acudientes/create', [AcudienteController::class, 'create'])->name('acudientes.create');
Route::post('acudientes', [AcudienteController::class, 'store'])->name('acudientes.store');
Route::get('acudientes/{acudiente}', [AcudienteController::class, 'show'])->name('acudientes.show');
Route::get('acudientes/{acudiente}/edit', [AcudienteController::class, 'edit'])->name('acudientes.edit');
Route::put('acudientes/{acudiente}', [AcudienteController::class, 'update'])->name('acudientes.update');
Route::delete('acudientes/{acudiente}', [AcudienteController::class, 'destroy'])->name('acudientes.destroy');
Route::post('acudientes/acudiente', [AcudienteController::class, 'search'])->name('acudientes.search');


// Alergias routes
Route::get('alergias', [AlergiasController::class, 'index'])->name('alergias.index');
Route::get('alergias/create', [AlergiasController::class, 'create'])->name('alergias.create');
Route::post('alergias', [AlergiasController::class, 'store'])->name('alergias.store');
Route::get('alergias/{alergia}', [AlergiasController::class, 'show'])->name('alergias.show');
Route::get('alergias/{alergia}/edit', [AlergiasController::class, 'edit'])->name('alergias.edit');
Route::put('alergias/{alergia}', [AlergiasController::class, 'update'])->name('alergias.update');
Route::delete('alergias/{alergia}', [AlergiasController::class, 'destroy'])->name('alergias.destroy');
Route::post('alergias/alergia', [AlergiasController::class, 'search'])->name('alergias.search');
