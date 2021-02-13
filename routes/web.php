<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::view("about","about");

// Route::view("contact","contact");


// Route::get('/services', function () {
//     return view('services');
// });

// Route::view("services","services");

//Laravel 7.x syntax
//Route::get("users","Users@index");

//Laravel 8.x syntax

Route::get("users",[UsersController::class, "index"]);

Route::get("contact",[ContactController::class,"index"]);

Route::get("about",[AboutController::class,"index"]);

Route::get("services",[ServiceController::class,"index"]);

Route::get("/",[WelcomeController::class,"index"]);

Route::get("register",[RegisterController::class,"index"]);

Route::get("login",[LoginController::class,"index"]);

Route::get('test', function () {
    return view('test');
});