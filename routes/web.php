<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostFilm;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardAdminController;

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

Route::get('/', function () {
    return view('homepage', [
        "title" => "Homepage"
    ]);
});
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/dashboardadmin', DashboardAdminController::class)->middleware('admin');
Route::resource('/dataadmins', AdminController::class)->middleware('admin');
Route::get('/createdataadmins', [AdminController::class, 'create'])->middleware('admin');
Route::resource('/postfilm', DashboardPostFilm::class);
Route::resource('/datafilms', FilmController::class)->middleware('admin');
Route::get('/createdatafilms', [FilmController::class, 'create'])->middleware('admin');
Route::resource('/datausers', UserController::class)->middleware('admin');
Route::get('/createdatausers', [UserController::class, 'create'])->middleware('admin');
