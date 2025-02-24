<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleDocuments>
 */
class VehicleDocumentFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'vehicle_id' => \App\Models\Vehicle::factory(),
            'name' => $this->faker->word(),
            'type' => $this->faker->randomElement(['registration', 'insurance', 'permit']),
            'file' => $this->faker->word() . '.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
