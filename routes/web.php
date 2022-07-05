<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Muhammad Kafanal Kafi",
        "email" => "muhammad_kafi_30rpl@student.smktelkom-mlg.sch.id"
    ]);
});

Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);

Route::get('/categories', [CategoryController::class, "index"]);

Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "authenticate"]);

Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "store"]);
