<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Sorting;
use App\Models\Tag;
use App\Models\User;
use Dotenv\Util\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $locations = [0, 1, 2];

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

        return [
            'location' => $this->faker->randomElement($locations),
            'title' => $this->faker->sentence,
            'short_title' => $this->faker->sentence(2),
            'summary' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image_url' => $faker->imageUrl(),
            'user_id' => User::factory(),
            'is_active' => $this->faker->boolean,
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Post $post) {
            $categories = Category::where('is_active', true)->get();
            $tags = Tag::where('is_active', true)->get();

            $post->categories()->attach($categories->random(1,10)->pluck('id')->toArray());
            $post->tags()->attach($tags->random(1,30)->pluck('id')->toArray());
        });
    }
}
