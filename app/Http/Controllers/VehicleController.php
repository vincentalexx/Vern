<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function detail(Request $request){
        $vehicle = Vehicle::find($request->id);
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        return view('vehicle_detail', ['vehicle' => $vehicle, 'startDate' => $startDate, 'endDate' => $endDate]);
    }
}
