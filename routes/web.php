<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

// Route::get('/about', function () {
//     return view('about');
// });

Route::view("about","about");

Route::get('/contact', function () {
    return view('contact');
});

// Route::view("contact","contact");


// Route::get('/services', function () {
//     return view('services');
// });

Route::view("services","services");

//Laravel 7.x syntax
//Route::get("users","Users@index");

//Laravel 8.x syntax

Route::get("users",[UsersController::class, "loadView"]);


Route::get('test', function () {
    return view('test');
});