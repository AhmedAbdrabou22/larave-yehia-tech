<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cars>
 */
class CarsFactory extends Factory
{
    protected $model = Cars::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name,
            "model"=>$this->faker->numerify,
            "year"=>$this->faker->year
        ];
    }
}
