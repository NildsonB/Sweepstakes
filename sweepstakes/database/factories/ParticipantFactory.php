<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'sweepstake_id' => fake()->randomElement(['019a3cce-e34a-72c4-a0d0-67cdbd03f21e', '019a3d04-ac0b-71e6-90a8-0bacc06a0d6d', '019a3d4e-2c8a-70a9-a16d-0c9b4eff4bc6', '019a3d4e-666c-70a6-a85f-bced818ebe99'])

        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
