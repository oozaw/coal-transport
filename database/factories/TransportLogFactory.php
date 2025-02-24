<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransportLog>
 */
class TransportLogFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'transport_id' => \App\Models\Transport::factory(),
            'user_id' => \App\Models\User::factory(),
            'action' => $this->faker->randomElement(['check-in', 'departure', 'arrival']),
            'label' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(6),
            'old_data' => null,
            'new_data' => json_encode(['status' => 'updated']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
