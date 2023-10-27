<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Carbon\Carbon;
use App\Models\Order;

class OrderController extends Controller
{
    public function orderform(Request $request){
        $vehicle = Vehicle::find($request->vehicle_id);
        $duration = $this->durationCount($request->startDate, $request->endDate);
        return view('order', ['vehicle' => $vehicle, 'startDate' => $request->startDate, 'endDate' => $request->endDate, 'duration' => $duration]);
    }

    public function orderplace(Request $request){
        $request->validate([
            'fullname' => 'required',
            'nik' => 'required|numeric|min:16',
            'sim' => 'required|numeric',
            'phone' => 'required|numeric|min:10',
            'email' => 'required|email',
            'vehicle_id' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);
        $vehicle = Vehicle::find($request->vehicle_id);
        $duration = $this->durationCount($request->startDate, $request->endDate);
        $totalPrice = $duration * $vehicle->price;
        $order = [
            'user_id' => 1, // ini kalo udah ada auth, sementara bound to user 1
            'vehicle_id' => $request->vehicle_id,
            'start_time' => $request->startDate,
            'end_time' => $request->endDate,
            'name' => $request->fullname,
            'id_nik' => $request->nik,
            'id_sim' => $request->sim,
            'phone' => $request->phone,
            'email' => $request->email,
            'total_price' => $totalPrice,
            'payment_type' => 1, // 1 = cash, 2 = midtrans (sementara default ke cash karena belum ada popup sama logic midtransnya)
            'payment_ref' => '',
            'status' => 2, // 1 = menunggu pembayaran, 2 = menunggu konfirmasi, 3 = sedang berlangsung, 4 = selesai, 5 = dibatalkan
        ];
        Order::create($order);
        return view('success');
    }

    private function durationCount($startTime, $endTime){
        $startTimeCount = Carbon::parse($startTime);
        $endTimeCount = Carbon::parse($endTime);
        $minutesDiff = $startTimeCount->diffInMinutes($endTimeCount);
        $duration = 0;
        if($minutesDiff % 1440 == 0){
            $duration = ($minutesDiff/1440);
        } else {
            $duration = (((int) ($minutesDiff/1440)) + 1);
        }
        return $duration;
    }
}
