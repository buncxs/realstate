<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [UserController::class, 'index'])->name('user.index');
/*
Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

  Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

  // Categories Group
  Route::name('categories.')->prefix('categories')->controller(CategoryController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('', 'store')->name('store');
  });
  // End Categories Group



}); // End Group Admin Middleware

Route::middleware(['auth', 'role:agent'])->group(function () {
  Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
}); // End Group Agent Middleware

Route::name('user.')->prefix('user')->middleware(['auth', 'role:user'])->group(function () {
  Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
  Route::get('profile', [UserController::class, 'edit'])->name('profile.edit');
  Route::get('profile/password', [UserController::class, 'password'])->name('profile.password');
}); // End Group User Middleware


require __DIR__ . '/auth.php';
