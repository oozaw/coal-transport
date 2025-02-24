<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Routes>
 */
class RouteFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Semarang'];

        return [
            'name' => 'Route ' . $this->faker->numberBetween(1, 100),
            'start_point' => $this->faker->randomElement($cities),
            'end_point' => $this->faker->randomElement($cities),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
