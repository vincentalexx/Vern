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
                                UUID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Vehicle Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="border-gray-700 hover:bg-gray-50">
                            <th scope="row" class="pl-4 py-4">
                                {{ $order->id }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $order->name }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $order->vehicle->brand }} {{ $order->vehicle->model }} {{ $order->vehicle->year }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $order->start_time }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $order->end_time }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $order->total_price }}
                            </td>
                            <td class="px-4 py-4 text-right flex">
                                <a href="#" class="font-medium text-Blue hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
