<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'index'])
    ->name('event.index');

Route::post('/registro', [RegistrationController::class, 'store'])
    ->name('event.store');

Route::get('/confirmacion', [RegistrationController::class, 'success'])
    ->name('event.success');