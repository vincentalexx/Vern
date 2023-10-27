<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Order;

class SearchController extends Controller
{
    public function search(Request $request){
        $request -> validate([
            'location' => 'required|not_in:0',
            'startDate' => 'required',
            'finishDate' => 'required',
        ]);
        $type = $request->vehicle_type;
        $startDate = $request->startDate;
        $endDate = $request->finishDate;
        $vehicles = Vehicle::where('type_id', $type)
        ->where('location_id', $request->location)
        ->get();
        $results = $vehicles->filter(function ($vehicle) use ($startDate, $endDate) {
            return $this->checkAvailabilityForTimeRange($vehicle->id, $startDate, $endDate);
        });
        return view('search', ['results' => $results, 'startDate' => $startDate, 'endDate' => $endDate]);
    }

    private function checkAvailabilityForTimeRange($vehicleId, $startTime, $endTime)
    {
        $isAvailable = !Order::where('vehicle_id', $vehicleId)
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where('start_time', '<', $endTime)
                    ->where('end_time', '>', $startTime);
            })
            ->exists();

        return $isAvailable;
    }
}
