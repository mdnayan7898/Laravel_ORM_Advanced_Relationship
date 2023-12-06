<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::inRandomOrder()->first()->id,
            'service' => fake()->name(),
            'date' => fake()->date(),
            'payment' => fake()->randomFloat(2, 10, 1000),
        ];
    }
}
