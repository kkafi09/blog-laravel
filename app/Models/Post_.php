<?php

namespace App\Models;

class Post{

    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
