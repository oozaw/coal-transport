<?php

use App\Http\Controllers\Api\RouteController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});

Route::group([
    // 'middleware' => 'auth:sanctum',
] ,function () {
    Route::prefix('routes')->group(function () {
        Route::get('/', [RouteController::class, 'index']);
        Route::post('/', [RouteController::class, 'store']);
        Route::get('/{route}', [RouteController::class, 'show']);
        Route::put('/{route}', [RouteController::class, 'update']);
        Route::delete('/{route}', [RouteController::class, 'destroy']);
    });

    Route::prefix('vehicles')->group(function () {
        Route::get('/', [VehicleController::class, 'index']);
        Route::post('/', [VehicleController::class, 'store']);
        Route::get('/{vehicle}', [VehicleController::class, 'show']);
        Route::put('/{vehicle}', [VehicleController::class, 'update']);
        Route::delete('/{vehicle}', [VehicleController::class, 'destroy']);
    });
});
