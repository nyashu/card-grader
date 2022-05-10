<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CardGradeController;
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

Route::get('/dashboard', function (){
    return view('backend.dashboard');
})->middleware('auth');

