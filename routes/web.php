<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Kafanal Kafi",
        "email" => "muhammad_kafi_30rpl@student.smktelkom-mlg.sch.id"
    ]);
});

Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);
Route::get('/categories/{category:slug}', [CategoryController::class, "index"]);
