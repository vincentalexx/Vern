@extends('layouts.app')
@section('title', 'Admin History')
@push('styles')

@endpush

@section('content')
    <div class="flex justify-center items-center w-full h-full pt-[10vh]">
        <div class="container pt-20">
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
