<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $carIdCounter = 1;
        return [
            'car_id' => $carIdCounter++,
            'name' => fake()->name(),
            'mobile' => '01690091590',
            'address' => fake()->address(),
        ];
    }
}
