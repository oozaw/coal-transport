<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transport>
 */
class TransportFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'route_id' => \App\Models\Route::factory(),
            'vehicle_id' => \App\Models\Vehicle::factory(),
            'driver_id' => \App\Models\Driver::factory(),
            'description' => $this->faker->sentence(6),
            'status' => $this->faker->randomElement(['scheduled', 'in transit', 'completed']),
            'estimated_departure_time' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'estimated_arrival_time' => $this->faker->dateTimeBetween('+1 day', '+2 months'),
            'departure_time' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
            'arrival_time' => $this->faker->optional()->dateTimeBetween('now', '+1 month'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
