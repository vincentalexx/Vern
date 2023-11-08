<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Order</title>
</head>

<body>
    <x-navbar />
    <div class="w-[80vw] mx-auto mt-[16vh] text-Gray">
        <div class="flex flex-col gap-y-6">
            <div class="grid grid-cols-3 items-center">
                <a onclick="window.history.back()" class="cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-3xl text-black text-opacity-70"></i>
                </a>
                <h1 class="text-center text-black text-opacity-70 font-extrabold underline text-4xl">
                    Your Order
                </h1>
            </div>
            <form method="POST" action="{{ route('order.place') }}"
                class="flex flex-col md:flex-row md:justify-between w-full gap-8">
                @csrf
                <div class="w-1/2">
                    <h1 class="text-2xl font-bold mb-2">Order Details</h1>
                    <div class="border-2 w-full rounded-xl shadow-lg p-7 flex flex-col gap-3">
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="John Doe"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold @error('fullname') border-red-500 @enderror">
                            @error('fullname')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" placeholder="XXXXXXXXXXXXXXXX"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold @error('nik') border-red-500 @enderror">
                            @error('nik')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="sim">Driver's License
                                Number</label>
                            <input type="text" name="sim" placeholder="XXXX-XXXX-XXXXXX" id="sim"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold @error('sim') border-red-500 @enderror">
                            @error('sim')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="phone">Phone
                                Number</label>
                            <input type="text" name="phone" placeholder="081234567890" id="phone"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="email">Email</label>
                            <input type="email" name="email" placeholder="john_doe@gmail.com" id="email"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div>
                        <h1 class="text-2xl font-bold mb-2">Rental Details</h1>
                        <div
                            class="border-2 w-full rounded-xl shadow-lg p-7 flex flex-col gap-4 divide-y divide-black divide-opacity-30">
                            @if ($vehicle == null || $startDate == null || $endDate == null)
                                <h1 class="text-4xl font-semibold text-center h-96">Error in fetching data, please try
                                    again
                                </h1>
                            @else
                                <h1 class="text-4xl font-semibold">
                                    {{ $vehicle->fullname }}</h1>
                                <div class="pt-3">
                                    <h3 class="font-bold">Features:</h3>
                                    <ul class="flex gap-6">
                                        <li class="flex items-center gap-1">
                                            <i class="fa-solid fa-chair"></i>
                                            <p>{{ $vehicle->capacity }}-Seater</p>
                                        </li>
                                        <li class="flex items-center gap-1">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <p>{{ $vehicle->fuel }}</p>
                                        </li>
                                        <li class="flex items-center gap-1">
                                            <i class="fa-solid fa-gears"></i>
                                            <p>{{ $vehicle->transmission }}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pt-3">
                                    <label class="text-sm font-bold opacity-70">Pick Up Location :</label>
                                    <div class="flex items-center gap-1">
                                        <p class="">{{ $vehicle->location->name }} • </p>
                                        <a href="{{ $vehicle->location->link }}"
                                            class="underline hover:underline-offset-2 duration-300">See
                                            on Maps</a>
                                        <i class="fa-solid fa-arrow-up rotate-45"></i>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <label class="text-sm font-bold opacity-70">Rental Duration :</label>
                                    <p class="text-sm mt-2">{{ date('D, d M Y H:i', strtotime($startDate)) }} -
                                        {{ date('D, d M Y H:i', strtotime($endDate)) }}
                                        • {{ $duration }} Days </p>
                                </div>
                                <div class="pt-3">
                                    <label class="text-sm font-bold opacity-70">Grand Total :</label>
                                    <div class="flex">
                                        <div class="w-full">
                                            <p class="text-4xl font-semibold">Rp.
                                                {{ rupiah($vehicle->price * $duration) }}
                                            </p>
                                        </div>
                                        <div>
                                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                            <input type="hidden" name="startDate" value="{{ $startDate }}">
                                            <input type="hidden" name="endDate" value="{{ $endDate }}">
                                            <button type="submit"
                                                class="text-xl font-semibold bg-gradient-to-b from-OrangeA to-OrangeB text-white hover:opacity-80 rounded-md h-10 w-32 tracking-widest ">Continue</button>
                                        </div>
                                    </div>
                                    <p class="pt-2 text-red-500">{{ Session::pull('error') }}</p>
                                    @if ($errors->has('vehicle_id') || $errors->has('startDate') || $errors->has('endDate'))
                                        <p class="text-red-500 text-sm pt-8">Error in passing data to server, please
                                            try
                                            again</p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
