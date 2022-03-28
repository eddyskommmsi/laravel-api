<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;



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
    return view('login');
})->name('/');

Route::resource('user', UserController::class);

Route::get('home',[HomeController::class, 'index'])->name('home');



//Call Login API
 Route::get('login',[LoginController::class, 'login'])->name('login');
 Route::post('loginApi',[LoginController::class, 'loginApi'])->name('loginApi');
 
//Call Register API
Route::get('register',[RegisterController::class, 'register'])->name('register');
Route::post('registerApi',[RegisterController::class, 'registerApi'])->name('registerApi');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');