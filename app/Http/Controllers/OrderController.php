<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapToken;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccess;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function orderform(Request $request){
        $vehicle = Vehicle::find($request->vehicle_id);
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        if(!$this->checkAvailabilityForTimeRange($vehicle->id, $startDate, $endDate)){
            $request->session()->put('error', 'Kendaraan tidak tersedia di tanggal yang dipilih');
            return redirect()->back();
        }
        $duration = $this->durationCount($startDate, $endDate);
        return view('order', ['vehicle' => $vehicle, 'startDate' => $startDate, 'endDate' => $endDate, 'duration' => $duration]);
    }

    public function orderplace(Request $request){
        $request->validate([
            'fullname' => 'required',
            'nik' => 'required|numeric|min_digits:16',
            'sim' => 'required|numeric',
            'phone' => 'required|numeric|min_digits:10',
            'email' => 'required|email',
            'vehicle_id' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);
        $vehicle = Vehicle::find($request->vehicle_id);
        if(!$this->checkAvailabilityForTimeRange($vehicle->id, $request->startDate, $request->endDate)){
            $request->session()->put('error', 'Kendaraan tidak tersedia di tanggal yang dipilih');
            return redirect()->back();
        }
        $duration = $this->durationCount($request->startDate, $request->endDate);
        $totalPrice = $duration * $vehicle->price;
        $order = [
            'user_id' => Auth::user()->id,
            'vehicle_id' => $request->vehicle_id,
            'start_time' => $request->startDate,
            'end_time' => $request->endDate,
            'name' => $request->fullname,
            'id_nik' => $request->nik,
            'id_sim' => $request->sim,
            'phone' => $request->phone,
            'email' => $request->email,
            'total_price' => $totalPrice,
            'payment_type' => 0, // milih pembayaran di page selanjutnya, default 0
            'payment_ref' => '',
            'status' => 1, // 1 = menunggu pembayaran, 2 = menunggu konfirmasi, 3 = sedang berlangsung, 4 = selesai, 5 = dibatalkan
        ];
        $order = Order::create($order);
        return view('payment', ['order' => $order]);
    }

    public function pay(Request $request){
        $request->validate([
            'metode' => 'not_in:0',
        ]);
        $order = Order::find($request->id);

        if($request->metode == 1){
            $order->payment_type = 1;
            $order->status = 2;
            $order->save();
            Mail::to('adm.vern@gmail.com')->send(new OrderSuccess($order)); // ga dikirim ke email yang diinput, tapi ke email kita
            Mail::to($order->email)->send(new OrderSuccess($order)); // real case but disable on development, kalo mau coba uncomment aja
            return redirect()->route('success');
        }
        else if($request->metode == 2){
            $order->payment_type = 2;
            $order->save();
            $midtrans = new CreateSnapToken($order);
            $url = $midtrans->getRedirectURL();
            return redirect($url);
        }
    }

    public function midtransCallback(Request $request){
        if($request->transaction_status == 'capture' || $request->transaction_status == 'settlement'){
            $order = Order::where('id', $request->order_id)->first();
            $order->status = 2;
            $order->payment_ref = $request->transaction_id;
            $order->save();
            Mail::to('adm.vern@gmail.com')->send(new OrderSuccess($order)); // ga dikirim ke email yang diinput, tapi ke email kita (buat logging)
            Mail::to($order->email)->send(new OrderSuccess($order));
        }
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

    public function history(){
        $user = Auth::user()->id;

        $orders = Order::where('user_id', $user)->with('vehicle')->get();
        // return view('history', ['orders' => $orders]);
        return Inertia::render('History', ['orders' => $orders]);
    }
}
