@extends('')

{{-- TBD: detail dropdown --}}

<body class="pt-[15vh]">
    <x-navbar />
        <div class="container mx-auto my-10 text-Gray ">
            <div class="flex flex-col gap-y-12">
                <div class="flex flex-row justify-between items-center">
                    <a href="{{ route('home') }}">
                    <i class="fa-solid fa-arrow-left-long fa-2xl"></i>
                </a>
                <h1 class="text-4xl font-bold">Orders</h1>
                <div></div>
            </div>
            <div class="flex w-full flex-col md:flex-row gap-12">
                <div class="flex flex-col gap-y-2 w-full">
                    <p class="text-2xl font-bold">Ongoing</p>
                    <div class="py-2 border rounded-lg shadow-md w-full divide-solid divide-y-[2px] divide-[#00000099] flex flex-col">
                    @foreach ($orders as $order)
                        @if ($order->status == 1 || $order->status == 2 || $order->status == 3)
                            <div class="">
                                <div class="flex justify-between items-center py-4 cursor-pointer px-6">
                                    <div class="flex flex-col">
                                        <p class="text-3xl font-semibold">{{$order->vehicle->brand}} {{ $order->vehicle->model}} {{$order->vehicle->year}}</p>
                                        <p class="text-base font-normal"> {{$order->start_time}} - {{$order->end_time}} </p>
                                    </div>
                                    <i class="fa-solid fa-circle-chevron-down fa-2xl"></i>
                                </div>
                                <div class="detail divide-solid divide-y-[0.5px] divide-[#00000099] transition-all 0.3s bg-slate-100">
                                    <div class="px-6">
                                        <div>
                                            <p class="font-semibold text-sm">Features:</p>
                                            <ul class="flex gap-6 text-sm py-2">
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-chair"></i>
                                                    <p>{{ $order->vehicle->capacity }}-Seater</p>
                                                </li>
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-gas-pump"></i>
                                                    <p>{{ $order->vehicle->fuel }}</p>
                                                </li>
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-gears"></i>
                                                    <p>{{ $order->vehicle->transmission }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex py-2">
                                            <p class="text-sm font-semibold">Color : </p>
                                            <p class="text-sm">{{$order->vehicle->color}}</p>
                                        </div>
                                    <div class="py-2 text-sm">
                                        <p class="font-semibold text-sm">Pick Up Location :</p>
                                        <div class="flex items-center gap-1">
                                            <p class="">{{ $order->vehicle->location->name }} • </p>
                                            <a href="{{ $order->vehicle->location->link }}"
                                                class="underline hover:underline-offset-2 duration-300">See
                                                on Maps</a>
                                                <i class="fa-solid fa-arrow-up rotate-45"></i>
                                            </div>
                                        </div>
                                        <div class="py-2 text-sm">
                                            <p class="font-semibold">Rental Duration :</p>
                                            <p class="text-sm mt-2">{{ date('l, d M Y H:i', strtotime($order->start_time)) }} - {{ date('l, d M Y H:i', strtotime($order->end_time)) }} •  Days</p>
                                        </div>
                                        <div class="py-2">
                                            <p class="text-sm font-semibold">Grand Total :</p>
                                            <p class="text-2xl">Rp. {{rupiah($order->total_price)}} </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @endif
                                @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-y-2 w-full">
                <p class="text-2xl font-bold">History</p>
                <div
                    class="py-2 border rounded-lg shadow-md w-full divide-solid divide-y-[2px] divide-[#00000099] flex flex-col">
                    @foreach ($orders as $order)
                        @if ($order->status == 4 || $order->status == 5)
                            <div class="">
                                <div class="flex justify-between items-center py-4 cursor-pointer px-6">
                                    <div class="flex flex-col">
                                        <p class="text-3xl font-semibold">{{$order->vehicle->brand}} {{ $order->vehicle->model}} {{$order->vehicle->year}}</p>
                                        <p class="text-base font-normal"> {{$order->start_time}} - {{$order->end_time}} </p>
                                    </div>
                                    <i class="fa-solid fa-circle-chevron-down fa-2xl"></i>
                                </div>
                                <div class="detail divide-solid divide-y-[0.5px] divide-[#00000099] transition-all 0.3s bg-slate-100">
                                    <div class="px-6">
                                        <div>
                                            <p class="font-semibold text-sm">Features:</p>
                                            <ul class="flex gap-6 text-sm py-2">
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-chair"></i>
                                                    <p>{{ $order->vehicle->capacity }}-Seater</p>
                                                </li>
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-gas-pump"></i>
                                                    <p>{{ $order->vehicle->fuel }}</p>
                                                </li>
                                                <li class="flex items-center gap-1">
                                                    <i class="fa-solid fa-gears"></i>
                                                    <p>{{ $order->vehicle->transmission }}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex py-2">
                                            <p class="text-sm font-semibold">Color : </p>
                                            <p class="text-sm">{{$order->vehicle->color}}</p>
                                        </div>
                                    <div class="py-2 text-sm">
                                        <p class="font-semibold text-sm">Pick Up Location :</p>
                                        <div class="flex items-center gap-1">
                                            <p class="">{{ $order->vehicle->location->name }} • </p>
                                            <a href="{{ $order->vehicle->location->link }}"
                                                class="underline hover:underline-offset-2 duration-300">See
                                                on Maps</a>
                                                <i class="fa-solid fa-arrow-up rotate-45"></i>
                                            </div>
                                        </div>
                                        <div class="py-2 text-sm">
                                            <p class="font-semibold">Rental Duration :</p>
                                            <p class="text-sm mt-2">{{ date('l, d M Y H:i', strtotime($order->start_time)) }} - {{ date('l, d M Y H:i', strtotime($order->end_time)) }} •  Days</p>
                                        </div>
                                        <div class="py-2">
                                            <p class="text-sm font-semibold">Grand Total :</p>
                                            <p class="text-2xl">Rp. {{rupiah($order->total_price)}} </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
</body>

</html>
