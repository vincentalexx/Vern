<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Order;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function inertiaSearch(Request $request)
    {
        $request->validate([
            'location' => 'required|not_in:0',
            'startDate' => 'required',
            'finishDate' => 'required|after:startDate',
        ]);

        $type = $request->vehicle_type;
        $startDate = $request->startDate;
        $endDate = $request->finishDate;

        $vehicles = Vehicle::with('location')->where('type_id', $type)->where('location_id', $request->location)->get();

        $results = $vehicles->filter(function ($vehicle) use ($startDate, $endDate) {
            return $this->checkAvailabilityForTimeRange($vehicle->id, $startDate, $endDate);
        })->values();

        return Inertia::render('Search', [
            'results' => $results,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
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
