<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MyListController;
use App\Http\Controllers\TaskController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard after login (will list projects)
    Route::get('/notudo', [ProjectController::class, 'index'])->name('notudo');

    // Project Routes
    Route::resource('projects', ProjectController::class);

    // List Routes (nested under projects for creation, direct for update/delete)
    Route::post('projects/{project}/lists', [MyListController::class, 'store'])->name('lists.store');
    Route::put('lists/{list}', [MyListController::class, 'update'])->name('lists.update');
    Route::delete('lists/{list}', [MyListController::class, 'destroy'])->name('lists.destroy');

    // Task Routes (nested under lists for creation, direct for update/delete)
    Route::post('lists/{list}/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::post('tasks/{task}/toggle-complete', [TaskController::class, 'toggleComplete'])->name('tasks.toggleComplete'); // For AJAX completion
});