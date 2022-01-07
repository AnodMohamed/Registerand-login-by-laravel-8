<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\testController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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
    return view('welcome');
});
Route::get('/t',  [PhotoController::class, 'index']);
Route::get('/regester', [authController::class, 'regester']);
Route::post('/postregester', [authController::class, 'postregester']);
Route::get('/login', [authController::class, 'login'])->name("login");
Route::get('/logout', [authController::class, 'logout']);
Route::post('/postlogin', [authController::class, 'postlogin']);
Route::get('/home', [homeController::class, 'index']);
Route::get('/Superadmin', [homeController::class, 'Superadmin'])->middleware("admin");

