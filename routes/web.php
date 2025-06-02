<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NoteController;

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

// Route untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
})->name('home'); // Tambahkan nama route 'home' agar bisa diakses dari link kembali

// --- Route Register ---
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// --- Route Login ---
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// --- Route Halaman Notudo (Setelah Login) ---
// Middleware 'auth' memastikan hanya user yang sudah login bisa mengakses route ini
Route::middleware(['auth'])->group(function () {
    Route::get('/notudo', function() {
        return view('pages.Notudo'); // Mengarahkan ke resources/views/pages/Notudo.blade.php
    })->name('notudo'); // Memberi nama route 'notudo'
});

Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NoteController::class);
});

// --- Route Logout ---
// Gunakan POST untuk logout karena melibatkan perubahan status (session)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');