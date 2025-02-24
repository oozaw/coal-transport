<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransportCheckpoint>
 */
class TransportCheckpointFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'transport_id' => \App\Models\Transport::factory(),
            'checkpoint_id' => \App\Models\RouteCheckpoint::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
