<!-- admin_order_detail.blade.php -->
@extends('layouts.app')
@section('title', 'User Detail')

@section('content')
    <div class="container mx-auto mt-8 pt-[15vh] text-gray-600">
        <div class="flex items-center gap-4">
            <a onclick="window.history.back()" class="cursor-pointer">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </a>
            <h1 class="text-Blue font-black mb-2 text-5xl">Vehicle Detail</h1>
        </div>
        <div class="mt-12 w-full">
            <div class="py-4 flex justify-between w-full">
                <div class="w-[40%]">
                    <img src="{{ asset('images/' . $vehicle->image) }}" alt="Profile Picture" class="">
                </div>
                <div class="w-[54%] flex flex-col gap-x-6">
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Vehicle ID</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->id }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Vehicle Type</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->type_id }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Location</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->location_id }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Brand</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->brand }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Model</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->model }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Year</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->year }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Color</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->color }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Transmission</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->transmission }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Fuel Type</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->fuel }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Capacity</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->capacity }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Price</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->price }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more details as needed -->
        </div>
    </div>
@endsection
