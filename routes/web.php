<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PropertyController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenthicate'])->middleware('throttle:login');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Admin Dashboard'
    ]);
})->middleware('admin', 'auth');

// user routes
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user-dashboard')->middleware('user', 'auth');
Route::get('/user/property', [PropertyController::class, 'index'])->name('property-catalog')->middleware('user', 'auth');
Route::get('/user/property/search', [PropertyController::class, 'search'])->name('property-search')->middleware('user', 'auth');


Route::get('/user/property/{id}', [PropertyController::class, 'show'])->name('property-details')->middleware('user', 'auth');
