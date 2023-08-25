<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;
use App\Models\Tag;
use Database\Factories\CategoryPostFactory;
use Database\Factories\PostTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = ['News', 'Sports', 'Reels', 'Worklife', 'Travel', 'Future', 'Culture', 'TV', 'Weather', 'Sounds'];

        $tags = [
            'Politics', 'World News', 'Business', 'Technology', 'Science', 'Health', 'Entertainment',
            'Sports', 'Education', 'Environment', 'Opinion', 'Culture', 'Travel', 'Fashion', 'Food',
            'Lifestyle', 'Music', 'Movies', 'Books', 'Art', 'Gaming', 'Fitness', 'Parenting', 'Pets',
            'Automotive', 'Finance', 'Real Estate', 'Home & Garden', 'Beauty', 'Social Issues'
        ];

         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'admin',
             'last_name' => 'user',
             'email' => 'admin@example.com',
             'password' => 'password'
         ]);

         Category::factory(10)->create();

         foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'is_active' => true,
                'is_shown_in_footer' => true,
            ]);
        }

        Tag::factory(10)->create();

        foreach ($tags as $tagName) {
            Tag::create([
                'name' => $tagName,
                'is_active' => true,
            ]);
        }

        Post::factory(50)->create([
                'location' => 0,
            ]);

        Post::factory(50)->create([
            'location' => 1,
        ]);
        Post::factory(50)->create([
             'location' => 2,
         ]);
    }
}
