@extends('layouts.app')
@section('title', 'Admin Home')

@section('content')
    <form action="{{ route('admin.home') }}"class="pt-16"  method="POST">
        @csrf
        <div class="pt-[10vh] w-full flex flex-col justify-center items-center">
            <div class="container">
                <div>
                    <h1 class="text-Blue font-black text-5xl">Admin Dashboard</h1>
                </div>
                <div class="container mx-auto mt-4">
                    <div class="flex ">
                        <h3 class="text-3xl text-gray-400 w-full justify-between font-bold">Rent Sales Chart</h3>
                        <input type="number" name="year" min="1900" max="2099" step="1" class="rounded"/>
                    </div>
                    <div class="rounded shadow mt-2">
                        {!! $chartData->container() !!}
                    </div>

                </div>
            </div>
            <div class="w-full container flex gap-6 mt-8">
                <div class="w-[14%] border-2 p-4 border-gray-300 h-32 rounded-2xl bg-biruBagus flex flex-col justify-center text-left shadow-lg">
                    <div>
                        <h1 class="text-2xl text-gray-200 font-normal">Total Users :</h1>
                        <h1 class="text-3xl text-gray-50 font-semibold">{{ $countUsers }} Accounts</h1>
                    </div>
                </div>
                <div class="w-[14%] border-2 p-4 border-gray-300 h-32 rounded-2xl bg-biruBagus flex flex-col justify-center text-left shadow-lg">
                    <div>
                        <h1 class="text-2xl text-gray-200 font-normal">Total Vehicles :</h1>
                        <h1 class="text-3xl text-gray-50 font-semibold">{{ $countVehicles }} Vehicles</h1>
                    </div>
                </div>
                <div class="w-[14%] border-2 p-4 border-gray-300 h-32 rounded-2xl bg-biruBagus flex flex-col justify-center text-left shadow-lg">
                    <div>
                        <h1 class="text-xl text-gray-200 font-normal">Total Orders :</h1>
                        <h1 class="text-3xl text-gray-50 font-semibold">{{ $countOrders }} Orders</h1>
                    </div>
                </div>
                <div class="w-[14%] border-2 p-4 border-gray-300 h-32 rounded-2xl bg-biruBagus flex flex-col justify-center text-left shadow-lg">
                    <div>
                        <h1 class="text-2xl text-gray-200 font-normal">Total Rent :</h1>
                        <h1 class="text-3xl text-gray-50 font-semibold">{{ $countHistory }} Rents</h1>
                    </div>
                </div>
            </div>
            <script src="{{ $chartData->cdn() }}"></script>
            {{ $chartData->script() }}
        </div>
    </form>
@endsection
