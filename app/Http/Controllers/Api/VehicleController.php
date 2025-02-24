<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $vehicles = Vehicle::paginate(10);
        return ApiResponse::successCollection(200, 'Vehicles retrieved successfully', $vehicles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'plate_number' => 'required|string|max:255|unique:vehicles',
                'image' => 'nullable|string|max:255',
                'status' => 'required|string|max:255',
                'date' => 'required|string|max:255',
            ]);

            $vehicle = Vehicle::create($validatedData);

            return ApiResponse::success(201, 'OK', $vehicle);
        } catch (\Exception $e) {
            Log::error('Error creating vehicle: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle) {
        try {
            if (!$vehicle->id) {
                return ApiResponse::error(404, 'NOT FOUND', 'Vehicle not found');
            }

            return ApiResponse::success(200, 'Vehicle retrieved successfully', $vehicle);
        } catch (\Exception $e) {
            Log::error('Error retrieving vehicle: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle) {
        try {
            if ($vehicle->id === null) {
                return ApiResponse::error(404, 'NOT FOUND', 'Vehicle not found');
            }

            $validatedData = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'plate_number' => 'sometimes|required|string|max:255|unique:vehicles,plate_number,' . $vehicle->id,
                'image' => 'nullable|string|max:255',
                'status' => 'sometimes|required|string|max:255',
                'date' => 'sometimes|required|string|max:255',
            ]);

            $vehicle->update($validatedData);

            return ApiResponse::success(200, 'Vehicle updated successfully', $vehicle);
        } catch (\Exception $e) {
            Log::error('Error updating vehicle: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle) {
        try {
            if (!$vehicle->id) {
                return ApiResponse::error(404, 'NOT FOUND', 'Vehicle not found');
            }

            $vehicle->delete();

            return ApiResponse::success(204, 'Vehicle deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting vehicle: ' . $e->getMessage());
            throw $e;
        }
    }
}
