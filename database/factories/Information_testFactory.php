<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information_test>
 */
class Information_testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = app(Faker::class);
        return [
          'name'=>fake()->name(),
          'age'=>fake()->numberBetween(18, 65),
          'gender'=>fake()->randomElement(['M', 'F'])
        ];
    }
}
