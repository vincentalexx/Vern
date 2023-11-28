<!-- admin_order_detail.blade.php -->
@extends('layouts.app')
@section('title', 'Order Detail')

@section('content')
    <div class="container mx-auto mt-8 pt-[15vh] text-gray-600">
        <div class="flex items-center gap-4">
            <a onclick="window.history.back()" class="cursor-pointer">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </a>
            <h1 class="text-Blue font-black mb-2 text-5xl">Order Detail</h1>
        </div>
        <div class="mt-5 w-[82%]">
            <div class="py-4 flex flex-wrap justify-between">
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Order ID</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->id }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">User ID</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->user_id }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Vehicle ID</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->vehicle_id }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Start Time</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->start_time }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">End Time</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->end_time }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Name</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->name }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">NIK</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->id_nik }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">SIM</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->id_sim }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Phone</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->phone }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Email</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->email }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Payment Type</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->payment_type }}" readonly>
                </div>
                <div class="flex flex-col">
                    <label class="h-7 font-bold">Status</label>
                    <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $order->status }}" readonly>
                </div>
            </div>
            <!-- Add more details as needed -->
        </div>
    </div>
@endsection
