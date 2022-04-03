<?php

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

Route::get('/blog', function() {
    $blog_posts = [
        [
            "title" => "Post Pertama di blogku",
            "slug" => "post-pertama-di-blogku",
            "author" => "Kafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est veniam consequatur amet fugiat blanditiis? Possimus porro, accusamus ipsam at consequuntur iure laudantium impedit, amet corrupti dicta ex totam deserunt numquam quas recusandae odio? Minima ducimus saepe enim laudantium corporis dolorem numquam dolorum officiis neque mollitia delectus, molestiae non magni dignissimos et voluptatem praesentium tempore adipisci, quasi assumenda sequi cumque architecto amet vero! Ea reprehenderit provident laudantium! Ipsam sunt necessitatibus iure exercitationem, a sequi nemo expedita repellat autem perferendis? Dolore, iusto.",
        ],
        [
            "title" => "Post Kedua di blogku",
            "slug" => "post-kedua-di-blogku",
            "author" => "Kafi 2",
            "body" => "Lorem ipsum random misasi dolor, sit amet consectetur adipisicing elit. Est veniam consequatur amet fugiat blanditiis? Possimus porro, accusamus ipsam at consequuntur iure laudantium impedit, amet corrupti dicta ex totam deserunt numquam quas recusandae odio? Minima ducimus saepe enim laudantium corporis dolorem numquam dolorum officiis neque mollitia delectus, molestiae non magni dignissimos et voluptatem praesentium tempore adipisci, quasi assumenda sequi cumque architecto amet vero! Ea reprehenderit provident laudantium! Ipsam sunt necessitatibus iure exercitationem, a sequi nemo expedita repellat autem perferendis? Dolore, iusto.",
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug){
    return view('post');
});
