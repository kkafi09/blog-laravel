<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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
        // User::factory(5)->create();
        User::create([
            "name" => "Muhammad Kafanal Kafi",
            "username" => "kkafi09",
            "email" => "kafi@gmail.com",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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

        // Post::factory(20)->create();
    }
}
