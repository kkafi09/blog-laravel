<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name" => "Muh. Kafanal Kafi",
            "email" => "afi.firda@gmail.com",
            "password" => bcrypt("rahasia")
        ]);

        User::create([
            "name" => "Budi",
            "email" => "budi@gmail.com",
            "password" => bcrypt("rahasia1")
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
        ]);

        Category::create([
            "name" => "Desain",
            "slug" => "desain",
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        Post::create([
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia, officia blanditiis consequatur repellendus, explicabo nobis autem, saepe rem velit perferendis consequuntur quam. Molestiae, eligendi pariatur.",
            "category_id" => 1,
            "user_id" =>1,
        ]);

        Post::create([
            "title" => "Post kedua",
            "slug" => "post-kedua",
            "excerpt" => "2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia, officia blanditiis consequatur repellendus, explicabo nobis autem, saepe rem velit perferendis consequuntur quam. Molestiae, eligendi pariatur.",
            "category_id" => 1,
            "user_id" =>2,
        ]);

        Post::create([
            "title" => "Post ketiga",
            "slug" => "post-ketiga",
            "excerpt" => "3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod aliquam harum est? Mollitia, officia blanditiis consequatur repellendus, explicabo nobis autem, saepe rem velit perferendis consequuntur quam. Molestiae, eligendi pariatur.",
            "category_id" => 2,
            "user_id" =>1,
        ]);
    }
}
