<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostFilm;
use App\Http\Controllers\FilmUserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmBookingController;

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

Route::resource('/', HomepageController::class);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/film', DashboardPostFilm::class);
Route::get('/film/{id}/booking', [DashboardPostFilm::class, 'booking']);
Route::post('/film/{id}/payment', [DashboardPostFilm::class, 'payment']);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::resource('/datafilms', FilmController::class)->middleware('admin');
Route::get('/createdatafilms', [FilmController::class, 'create'])->middleware('admin');

Route::resource('/datausers', UserController::class)->middleware('admin');
Route::get('/createdatausers', [UserController::class, 'create'])->middleware('admin');

Route::resource('/filmbooking', FilmBookingController::class)->middleware('admin');