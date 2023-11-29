<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyRentChart;
use App\Models\Location;
use App\Models\Order;
use App\Models\Type;
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
        $locations = Location::all();
        $types = Type::all();

        return view('admin_vehicle', ['vehicles' => $vehicles, 'locations' => $locations, 'types' => $types]);
    }

    public function getVehicleDetail(Vehicle $vehicle) {
        return view('admin_vehicle_detail', ['vehicle' => $vehicle]);
    }

    public function createVehicle(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'type' => 'required',
            'capacity' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $vehicle = new Vehicle();
        $vehicle->type_id = $request->input('type');
        $vehicle->location_id = $request->input('location');
        $vehicle->capacity = $request->input('capacity');
        $vehicle->brand = $request->input('brand');
        $vehicle->model = $request->input('model');
        $vehicle->year = $request->input('year');
        $vehicle->color = $request->input('color');
        $vehicle->transmission = $request->input('transmission');
        $vehicle->fuel = $request->input('fuel');
        $vehicle->price = $request->input('price');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $vehicle->image = $imageName;
        }

        $vehicle->save();

        return redirect()->route('admin.vehicle')->with('success', 'Vehicle created successfully.');
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

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User Record deleted successfully.');
    }

    public function deleteVehicle($id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);

            try {
                $order = Order::where('vehicle_id', $id)->firstOrFail();
                return redirect()->route('admin.vehicle')->with('error', 'Vehicle Record cannot be deleted because it has associated orders.');
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                // No associated orders, proceed with deletion
                $vehicle->delete();
                return redirect()->route('admin.vehicle')->with('success', 'Vehicle Record deleted successfully.');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return redirect()->route('admin.vehicle')->with('error', 'Vehicle Record not found.');
        } catch (\Exception $ex) {
            return redirect()->route('admin.vehicle')->with('error', 'An error occurred while deleting the vehicle.');
        }
    }


}
