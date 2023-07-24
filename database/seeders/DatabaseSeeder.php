<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'admin',
             'last_name' => 'user',
             'email' => 'admin@example.com',
             'password' => 'password'
         ]);

         Category::factory(10)->create();

         Tag::factory(10)->create();

         Post::factory(10)->create();

         Sorting::factory(10)->create();
    }
}