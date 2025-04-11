<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/login', [LoginController::class, 'index'])->name('login');