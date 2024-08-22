<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Post::factory(10)->create();

//        انت هنا عملت زي php tinker بس ال seedrs بتاخد مكانها
// بس لازم تبقي مظبط ال values بتاع ال factories
    }
}
