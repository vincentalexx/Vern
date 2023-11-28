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

    public function getOrderDetail(Order $order) {
        return view('admin_order_detail', ['order' => $order]);
    }

    public function getAllVehicle() {
        $vehicles = Vehicle::all();
        return view('admin_vehicle', ['vehicles' => $vehicles]);
    }

    public function getVehicleDetail(Vehicle $vehicle) {
        return view('admin_vehicle_detail', ['vehicle' => $vehicle]);
    }

    public function getAllUsers() {
        $users = User::all();
        return view('admin_users', ['users' => $users]);
    }

    public function getUsersDetail(User $user) {
        return view('admin_users_detail', ['user' => $user]);
    }

    public function adminHome() {
        $chart = app(MonthlyRentChart::class);
        $chartData = $chart->build(date('Y'));
        $countUsers = User::whereYear('created_at', date('Y'))->count();
        $countOrders = Order::whereIn('status', [1, 2, 3])->whereYear('start_time', date('Y'))->count();
        $countVehicles = Vehicle::whereYear('created_at', date('Y'))->count();
        $countHistory = Order::where('status', 4)->whereYear('start_time', date('Y'))->count();
        return view('admin_home', compact('chartData', 'countUsers', 'countOrders', 'countVehicles', 'countHistory'));
    }

    public function index(MonthlyRentChart $chart, Request $request) {
        $request->validate([
            'year' => 'required|integer|min:1900|max:2099',
        ]);
        $year = $request->input('year');
        $countUsers = User::whereYear('created_at', $year)->count();
        $countOrders = Order::whereIn('status', [1, 2, 3])->whereYear('start_time', $year)->count();
        $countVehicles = Vehicle::whereYear('created_at', $year)->count();
        $countHistory = Order::where('status', 4)->whereYear('start_time', $year)->count();
        $chartData = $chart->build($year);

        return view('admin_home', compact('chartData', 'countUsers', 'countOrders', 'countVehicles', 'countHistory'));
    }

}
