<!-- admin_order_detail.blade.php -->
@extends('layouts.app')
@section('title', 'User Detail')

@section('content')
    <div class="container mx-auto mt-8 pt-[15vh] text-gray-600">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.vehicle') }}" class="cursor-pointer">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </a>
            <h1 class="text-Blue font-black mb-2 text-5xl">Vehicle Detail</h1>
        </div>
        <div class="mt-12 w-full">
            <div class="py-4 flex justify-between w-full">
                <form method="POST" action="{{ route('admin.vehicle.update', ['vehicle' => $vehicle->id]) }}" class="flex justify-between items-center w-full " enctype="multipart/form-data">
                    @csrf
{{--                    @method('PUT')--}}
                    <div class="w-[40%]">
                        <img src="{{ asset('images/' . $vehicle->image) }}" alt="Profile Picture" class="">
                        <input type="file" name="image" class="mt-8" id="image" accept="image/*">

                    </div>
                    <div class="w-[54%] flex flex-col gap-x-6">
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Vehicle ID</label>
                                <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->id }}" readonly>
                            </div>
                            <div class="flex flex-col">
                                <label for="type" class="h-7 font-bold">Vehicle Type</label>
                                <select name="type" id="type" class="border-2 pt-[2px] rounded-md w-[400px] mb-3 h-8 px-2">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" {{ $type->id == $vehicle->type_id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label for="location" class="h-7 font-bold">Location</label>
                                <select name="location" id="location" class="border-2 pt-[2px] rounded-md w-[400px] mb-3 h-8 px-2">
                                    @foreach($locations  as $location)
                                        <option value="{{ $location->id }}" {{ $location->id == $vehicle->location_id ? 'selected' : '' }}>
                                            {{ $location->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Brand</label>
                                <input name="brand" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->brand }}" >
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Model</label>
                                <input name="model" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->model }}" >
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Year</label>
                                <input name="year" type="number" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->year }}" >
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Color</label>
                                <input name="color" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->color }}" >
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Transmission</label>
                                <input name="transmission" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->transmission }}" >
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Fuel Type</label>
                                <input name="fuel" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->fuel }}" >
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Capacity</label>
                                <input name="capacity" type="number" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $vehicle->capacity }}" >
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Price</label>
                                <input name="price" type="number" class="border-2 border-black rounded-md w-[400px] h-8 px-2" value="{{ $vehicle->price }}" >
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <button type="submit" class="border-2 border-gray-600 w-[400px] h-8 flex justify-center items-center text-gray-600 hover:shadow-md rounded-md mt-7 font-semibold">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="block flex justify-end mt-[-48px]">
            <form method="POST" action="{{ route('admin.vehicle.delete', ['vehicle' => $vehicle->id]) }}" >
                @csrf
                @method('DELETE')
                <div class="">
                    <button type="submit" class="bg-OrangeB w-[400px] h-8 flex justify-center items-center text-white rounded-md hover:shadow-md font-semibold">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
