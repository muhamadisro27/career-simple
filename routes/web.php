<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;


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

// Route Guest
// Login
Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'loginForm')->name('login-form');
    Route::post('/', 'login')->name('login');
});
// Register
Route::controller(AuthController::class)->group(function() {
    Route::get('register', 'registerForm')->name('register-form');
    Route::post('register', 'register')->name('register');
});
// Job list
Route::get('job', [JobController::class, 'index'])->name('job');

// Route Auth
Route::middleware('auth')->group(function() {
    // Profile
    Route::controller(ProfileController::class)->name('profile')->group(function() {
        Route::get('profile', 'index');
        Route::get('profile', 'edit')->name('.edit');
        Route::put('profile', 'update')->name('.update');
    });  
    // Dashboard
    Route::controller(DashboardController::class)->name('dashboard')->group(function () {
        Route::get('dashboard', 'index');
    });
    // Candidate
    Route::resource('candidate', CandidateController::class);

    // Logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

