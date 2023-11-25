<?php

namespace App\Http\Controllers;

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
        return view('admin_home');
    }
}
