<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [RegistrationController::class, 'index'])
    ->name('event.index');

Route::post('/registro', [RegistrationController::class, 'store'])
    ->name('event.store');

Route::get('/confirmacion', [RegistrationController::class, 'success'])
    ->name('event.success');

// Administración
Route::prefix('administracion')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('index');

    Route::get('/exportar', [AdminController::class, 'export'])
        ->name('export');

    Route::delete('/participantes/{registration}', [AdminController::class, 'destroy'])
        ->middleware('throttle:5,1')
        ->name('participants.destroy');
});
