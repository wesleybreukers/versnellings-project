<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
 * Basis index pagina
 */
Route::get('/', [PageController::class, 'index'])->name('index');

/*
 * Alle routes van de APP.
 */
Route::prefix('app')->name('app.')->group(function () {
    Route::get('/', [AppController::class, 'dashboard'])->name('dashboard');
    Route::match(array('get', 'post'), 'auth', [AppController::class, 'auth'])->name('auth');
});
