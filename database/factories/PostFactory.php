<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Sorting;
use App\Models\Tag;
use App\Models\User;
use Dotenv\Util\Str;
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

        return [
            'location' => $this->faker->randomElement($locations),
            'title' => $this->faker->sentence,
            'short_title' => $this->faker->sentence(2),
            'summary' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'user_id' => User::factory(),
            'image_url' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean,
        ];
    }
}
