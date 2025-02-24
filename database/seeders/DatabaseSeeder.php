<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Driver;
use App\Models\Admin;
use App\Models\Vehicle;
use App\Models\VehicleService;
use App\Models\VehicleDocument;
use App\Models\Route;
use App\Models\RouteCheckpoint;
use App\Models\Transport;
use App\Models\TransportCheckpoint;
use App\Models\TransportLog;
use App\Models\VehicleDocuments;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        // Buat Users
        User::factory(10)->create();

        // Buat Drivers dan Admins
        Driver::factory(5)->create();
        Admin::factory(3)->create();

        // Buat Vehicles
        Vehicle::factory(10)->create();

        // Buat Vehicle Services dan Documents
        VehicleService::factory(7)->create();
        VehicleDocument::factory(7)->create();

        // Buat Routes
        Route::factory(5)->create()->each(function ($route) {
            // Buat Checkpoints untuk setiap Route
            RouteCheckpoint::factory(3)->create(['route_id' => $route->id]);

            // Buat Transports untuk setiap Route
            Transport::factory(2)->create(['route_id' => $route->id])->each(function ($transport) use ($route) {
                // Ambil semua Checkpoints dari Route
                $checkpoints = RouteCheckpoint::where('route_id', $route->id)->get();

                // Buat TransportCheckpoint untuk setiap Checkpoint
                foreach ($checkpoints as $checkpoint) {
                    TransportCheckpoint::factory()->create([
                        'transport_id' => $transport->id,
                        'checkpoint_id' => $checkpoint->id,
                    ]);
                }
            });
        });

        // Buat Transport Logs
        TransportLog::factory(15)->create();
    }
}
