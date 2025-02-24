<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Route;
use App\Models\Transport;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        $page_title = 'Dashboard';

        $drivers = Driver::all();
        $admins = Admin::all();
        $vehicles = Vehicle::all();
        $routes = Route::all();
        $transports = Transport::all();

        $data = [
            'page_title' => $page_title,
            'drivers' => $drivers,
            'admins' => $admins,
            'vehicles' => $vehicles,
            'routes' => $routes,
            'transports' => $transports
        ];

        return view('dashboard.index', $data);
    }
}
