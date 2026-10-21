<?php

namespace Database\Factories;

use App\Models\Post;
use BcMath\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'body' => $this->faker->sentences(3, true),
            'author'=>$this->faker->name,
            'published'=>$this->faker->boolean
        ];
    }
}
