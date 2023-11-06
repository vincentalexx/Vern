<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
</head>

<body class="md:overflow-y-hidden">
    <x-navbar />
    <div
        class="container min-h-screen mt-[16vh] mx-auto h-screen flex flex-col md:flex-row gap-16 md:gap-0 text-Gray px-6 md:px-0">
        <div class="md:w-1/2 flex flex-col gap-y-8 md:gap-y-32">
            <div>
                <a onclick="window.history.back()" class="cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-3xl"></i>
                </a>
            </div>
            <img src="/images/accord.png" class="max-w-[80%] self-center" alt="">
            {{-- <img src="/images/vehicle/:id.png" class="max-w-[80%] self-center" alt=""> --}}
        </div>
        <div class="md:w-1/2 flex flex-col gap-8 divide-y-2 divide-borderColor md:overflow-y-scroll max-h-[75vh]">
            <div class="">
                <h1 class="font-bold text-4xl">{{ $vehicle->fullname }}</h1>
                <p>Has been Rented 400+ times • <i class="fa-sharp fa-solid fa-star text-OrangeA"></i>4.5
                    (248 Ratings)</p>
                <h1 class="font-bold text-5xl mt-3">Rp. {{ rupiah($vehicle->price) }}/Day</h1>
            </div>
            <div class="pt-8 flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <h3 class="font-bold">Color:</h3>
                    <div class="flex items-center gap-1 rounded-full border border-black px-2 py-0.5">
                        <div class="bg-{{ strtolower($vehicle->color) }} rounded-full w-4 h-4"></div>
                        <p class="font-semibold">{{ $vehicle->color }}</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold">Features:</h3>
                    <ul class="flex gap-6">
                        <li class="flex items-center gap-1">
                            <i class="fa-solid fa-chair"></i>
                            <p>{{ $vehicle->capacity }}-Seater</p>
                        </li>
                        {{-- <li class="flex items-center gap-1">
                            <i class="fa-solid fa-suitcase"></i>
                            <p>2 Pieces of Baggage</p>
                        </li> --}}
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
            </div>
            <div class="pt-8">
                <form action="{{ route('order.form') }}" method="GET">
                    @csrf
                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                    <input type="hidden" name="startDate" value="{{ $startDate }}"
                        @if ($startDate == null) disabled @endif>
                    <input type="hidden" name="endDate" value="{{ $endDate }}"
                        @if ($endDate == null) disabled @endif>
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex flex-col">
                            <p>Start Date</p>
                            <input type="datetime-local" name="startDate"
                                @if ($startDate != null) value="{{ date('Y-m-d', $startDate) . 'T' . date('H:i', $startDate) }}" @endif
                                class="border rounded-sm px-2"
                                @if ($startDate != null) disabled @else required @endif>
                        </div>
                        <div class="flex flex-col">
                            <p>End Date</p>
                            <input type="datetime-local" name="endDate"
                                @if ($endDate != null) value="{{ date('Y-m-d', $endDate) . 'T' . date('H:i', $endDate) }}" @endif
                                class="border rounded-sm px-2"
                                @if ($endDate != null) disabled @else required @endif>
                        </div>
                    </div>
                    <p class="pt-2 text-red-500">{{ Session::pull('error') }}</p>
                    <div class="pt-2">
                        <h3 class="font-bold">Rent Now:</h3>
                        <button type="submit"
                            class="mt-1 py-1 w-28 text-xl font-semibold bg-gradient-to-b from-OrangeA to-OrangeB text-white rounded-md hover:opacity-80">Rent</button>
                    </div>

                </form>
            </div>
            <div class="pt-8">
                <h3 class="font-bold">Pick Up Location:</h3>
                <div class="flex items-center gap-1">
                    <p class="">{{ $vehicle->location->name }} • </p>
                    <a href="{{ $vehicle->location->link }}"
                        class="underline hover:underline-offset-2 duration-300">See
                        on Maps</a>
                    <i class="fa-solid fa-arrow-up rotate-45"></i>
                </div>
            </div>
            <div class="pt-8">
                <h3 class="font-bold">Important Information:</h3>
                <h3 class="font-bold mt-4">Before you make a reservation</h3>
                <ul class="list-disc">
                    <li class="ml-5">Make sure to read the rental terms.</li>
                </ul>
                <h3 class="font-bold mt-4">After you make a reservation</h3>
                <ul class="list-disc">
                    <li class="ml-5">The provider will contact the driver via WhatsApp to request photos of
                        certain
                        mandatory documents.</li>
                </ul>
                <h3 class="font-bold mt-4">During pick-up</h3>
                <ul class="list-disc">
                    <li class="ml-5">Bring your ID card (KTP), driver's license (SIM A), and any other documents
                        required by the rental provider.</li>
                    <li class="ml-5">When you meet the rental staff, inspect the car's condition with the
                        inspector
                    </li>
                    <li class="ml-5">After that, read and sign the rental agreement</li>
                </ul>
            </div>
            <br>
        </div>
    </div>
</body>

</html>
