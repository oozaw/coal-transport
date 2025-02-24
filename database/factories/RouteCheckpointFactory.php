<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteCheckpoint>
 */
class RouteCheckpointFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'route_id' => \App\Models\Route::factory(),
            'name' => 'Checkpoint ' . $this->faker->numberBetween(1, 100),
            'address' => $this->faker->address,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'order_number' => $this->faker->randomDigitNotNull,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
