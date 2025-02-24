<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class RouteController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        try {
            $routes = Route::paginate(10);
            return ApiResponse::successCollection(200, 'success', $routes);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'start_point' => 'required|string|max:255',
                'end_point' => 'required|string|max:255',
            ]);

            $route = Route::create($validatedData);

            return ApiResponse::success(201, 'Route created successfully', $route);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Route $route) {
        try {
            $route = $route->load(['checkpoints' => function ($query) {
                $query->orderBy('order_number');
            }]);

            return ApiResponse::success(200, 'success', $route);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Route $route) {
        try {
            $validatedData = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'start_point' => 'sometimes|required|string|max:255',
                'end_point' => 'sometimes|required|string|max:255',
            ]);

            $route->update($validatedData);

            return ApiResponse::success(200, 'Route updated successfully', $route);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route) {
        try {
            $route->delete();
            return ApiResponse::success(200, 'Route deleted successfully');
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
