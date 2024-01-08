<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsociosController;
use App\Http\Controllers\ProponenteController;
use App\Http\Controllers\PropostaController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Proponente

    Route::get('/proponentes', [ProponenteController::class, 'index'])->name('proponentes.index');
    Route::post('/proponentes', [ProponenteController::class, 'store'])->name('proponentes.store');

    // Psocios
    Route::get('/psocios', [PsociosController::class, 'index'])->name('psocios.index');
    Route::post('/psocios', [PsociosController::class, 'store'])->name('psocios.store');

    // Proposta
    Route::get('/proposta', [PropostaController::class, 'index'])->name('proposta.index');
    Route::post('/proposta', [PropostaController::class, 'store'])->name('proposta.store');

});

require __DIR__.'/auth.php';
