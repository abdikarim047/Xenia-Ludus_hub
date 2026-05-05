<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SessionController::class, 'show'])->name('login');
Route::post('/login', [SessionController::class, 'create']);

Route::get('/register', [RegistrationController::class, 'show']);
Route::post('/register', [RegistrationController::class, 'store']);
Route::post('logout', [RegistrationController::class, 'destroy']);
