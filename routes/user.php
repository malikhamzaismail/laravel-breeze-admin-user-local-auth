<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\User\UserController;

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


// =====================     ADMIN ROUTES   =====================================


Route::get('/user/register', [RegisteredUserController::class, 'create'])->name('user.register');
Route::post('/user/register', [RegisteredUserController::class, 'store'])->name('user.register-store');



Route::get('/user/login', [AuthenticatedSessionController::class, 'create'])->name('user.login');
Route::post('/user/login', [AuthenticatedSessionController::class, 'store'])->name('user.login-store');

Route::post('/user/logout', [AuthenticatedSessionController::class, 'destroy'])->name('user.logout');

Route::get('/user/dashboard',[UserController::class, 'dashboard'])->name('user.dashboard');
