<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sweepstake>
 */
class SweepstakeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomDigit(),
            'number_of_winners' => fake()->randomDigit(),
            'end_date' => fake()->dateTime(),
            'description' => fake()->sentence()
        ];
    }
}
