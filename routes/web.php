<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/login_redirect', [LoginRedirectController::class, 'index'])->name('login_redirect');
});
