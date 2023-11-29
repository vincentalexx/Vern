@extends('layouts.app')
@section('title', 'Admin History')
@push('styles')

@endpush

@section('content')
    <div class="flex justify-center items-center w-full h-full pt-[10vh]">
        <div class="container pt-20 flex flex-col gap-8">
            <div class="flex items-center gap-4">
                <a onclick="window.history.back()" class="cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-3xl"></i>
                </a>
                <h1 class="text-Blue font-black mb-2 text-5xl">Vehicle Records</h1>
            </div>
            <form method="POST" action="{{ route('admin.vehicle.create') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="flex justify-between text-gray-600">
                        <div class="flex flex-col">
                            <label for="type" class="h-7 font-bold">Vehicle Type</label>
                            <select name="type" id="type" class="border pt-[2px] rounded-md w-[200px] mb-3 h-8 px-2">
                                @foreach($types  as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="location" class="h-7 font-bold">Location</label>
                            <select name="location" id="location" class="border pt-[2px] rounded-md w-[200px] mb-3 h-8 px-2">
                                @foreach($locations  as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Capacity</label>
                            <input type="number" name="capacity" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Brand</label>
                            <input name="brand" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Model</label>
                            <input name="model" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Year</label>
                            <input name="year" type="number" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Color</label>
                            <input name="color" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                        </div>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <div class="flex gap-[23px]">
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Transmission</label>
                                <input name="transmission" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Fuel</label>
                                <input name="fuel" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Price</label>
                                <input name="price" type="number" class="border rounded-md w-[200px] mb-3 h-8 px-2">
                            </div>
                            <div class="flex flex-col">
                                <label class="h-7 font-bold">Image</label>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <button type="submit" class="bg-OrangeA w-[200px] h-8 flex justify-center items-center text-white rounded-md mt-7 font-semibold">
                                Create Vehicle
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                    <thead class="text-xs uppercase bg-gray-300 text-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vehicle Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vehicle Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transmission
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fuel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vehicles as $vehicle)
                        <tr class="border-gray-700 hover:bg-gray-50">
                            <th scope="row" class="pl-4 py-4">
                                {{ $vehicle->id }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $vehicle->brand }} {{ $vehicle->model }} {{ $vehicle->year }}
                            </td>
                            <td class="px-4 py-4">
                                @if($vehicle->type_id == 1)
                                        Car
                                @elseif($vehicle->type_id == 2)
                                        Premium
                                @elseif($vehicle->type_id == 3)
                                    Motorcycle
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                {{ $vehicle->transmission }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $vehicle->fuel }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $vehicle->color }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $vehicle->price }}
                            </td>
                            <td class="px-4 py-4 text-right flex">
                                <a href="{{ route('admin.vehicle.detail', ['vehicle' => $vehicle->id]) }}" class="font-medium text-Blue hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
