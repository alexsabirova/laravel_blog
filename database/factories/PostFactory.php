<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->text(1500),
            //'thumbnail' => $this->faker->imageUrl,
            //'thumbnail' => $this->faker->image('public/storage/posts', 640, 520, null, false),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
