<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CardGradeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'frontend.home')->name('home');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Auth::routes();

Route::resource('/grade-card', CardGradeController::class);

Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');

Route::post('/message', [DashboardController::class, 'message'])->name('message');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/messages', [DashboardController::class, 'showMessages'])->name('showMessages');
});
