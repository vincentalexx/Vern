<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyRentChart;
use App\Models\Order;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getAllHistory() {
        $allowedStatus = [1, 2, 3];
        $orders = Order::whereIn('status', $allowedStatus)->get();

        return view('admin_history', ['orders' => $orders]);
    }

    public function getAllOrders() {
        $allowedStatus = [4, 5];
        $orders = Order::whereIn('status', $allowedStatus)->get();

        return view('admin_orders', ['orders' => $orders]);
    }

    public function getAllVehicle() {
        $vehicles = Vehicle::all();
        return view('admin_vehicle', ['vehicles' => $vehicles]);
    }

    public function getAllUsers() {
        $users = User::all();
        return view('admin_users', ['users' => $users]);
    }

    public function adminHome() {
        $chart = app(MonthlyRentChart::class);
        $chartData = $chart->build(date('Y'));
        $countUsers = User::all()->count();
        $countOrders = Order::where('status', [1, 2, 3])->count();
        $countVehicles = Vehicle::all()->count();
        $countHistory = Order::where('status', 4)->count();
        return view('admin_home', compact('chartData', 'countUsers', 'countOrders', 'countVehicles', 'countHistory'));
    }

    public function index(MonthlyRentChart $chart, Request $request) {
        $request->validate([
            'year' => 'required|integer|min:1900|max:2099',
        ]);
        $countUsers = User::all()->count();
        $countOrders = Order::where('status', [1, 2, 3])->count();
        $countVehicles = Vehicle::all()->count();
        $countHistory = Order::where('status', 4)->count();
        $year = $request->input('year');
        $chartData = $chart->build($year);

        return view('admin_home', compact('chartData', 'countUsers', 'countOrders', 'countVehicles', 'countHistory'));
    }
}
