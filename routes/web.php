<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

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

/*
Route::middleware('auth')->group(function () {
  Route::get('/profile', [UserController::class, 'editProfile'])->name('profile.edit');
  Route::patch('/profile/{user}', [UserController::class, 'updateProfile'])->name('profile.update');
  Route::get('/password', [UserController::class, 'editPassword'])->name('password.edit');
  Route::patch('/passwordd/{user}', [UserController::class, 'updatePassword'])->name('password.updates');
}); // End Group Auth Middleware
*/

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
}); // End Group Admin Middleware

Route::middleware(['auth', 'role:agent'])->group(function () {
  Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
}); // End Group Agent Middleware

require __DIR__ . '/auth.php';
