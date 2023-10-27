<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
    <style>
        .labl>input {
            display: none;
            visibility: hidden;
        }

        .labl>div {
            cursor: pointer;
            position: relative;
        }

        .labl>div::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .labl>div:hover::before,
        /* Add hover effect */
        .labl>input:checked+div::before {
            opacity: 1;
        }
    </style>

</head>

<body>
    {{--    <x-navbar /> --}}
    <x-clearnavbar />
    <div class="w-screen h-screen flex justify-center items-center bg-cover bg-blend-multiply bg-black bg-opacity-70"
        style="background-image: url('{{ asset('images/mobil.jpg') }}'); ">
        <div class="space-y-24">
            <h1 class="text-center text-5xl leading-[60px] max-w-4xl font-semibold text-white shadow-inner">Explore
                Jakarta
                Anytime
                You
                Want With Our Rental Services!</h1>
            <form method="GET" action="{{ route('search') }}" class="flex flex-col gap-6">
                @csrf
                <div class="grid grid-cols-3 text-center">
                    <label for="car" class="labl">
                        <input type="radio" id="car" name="vehicle_type" value="1" checked>
                        <div class="text-white">
                            <i class="fa-solid fa-car text-4xl"></i>
                            <p class="text-white">Car</p>
                        </div>
                    </label>
                    <label for="premium" class="labl">
                        <input type="radio" id="premium" name="vehicle_type" value="2">
                        <div class="text-white">
                            <i class="fa-solid fa-car-rear text-4xl"></i>
                            <p class="text-white">Premium</p>
                        </div>
                    </label>
                    <label for="motorcycle" class="labl">
                        <input type="radio" id="motorcycle" name="vehicle_type" value="3">
                        <div class="text-white">
                            <i class="fa-solid fa-motorcycle text-4xl"></i>
                            <p class="text-white">Motorcycle</p>
                        </div>
                    </label>
                </div>
                <div class="flex justify-center">
                    <div class="grid grid-cols-3 w-full text-White">
                        <div class="w-full">
                            <p class="ml-1">Rental Location</p>
                            <select name="location" id=""
                                class="text-xl h-14 w-full border-2 border-gray-500 cursor-pointer bg-homeInput text-black/[0.3] bg-opacity-70 rounded-l-2xl rounded-r-none px-4 @error('location') border-red-500 @enderror">
                                <option value="0" disabled selected>Pick a Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                            @error('location')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <p class="ml-1">Start Date</p>
                            <input type="datetime-local" name="startDate"
                                class="text-xl h-14 border-y-2 border-gray-500 cursor-pointer bg-homeInput text-black/[0.3] bg-opacity-70 w-full px-4 @error('startDate') border-red-500 @enderror">
                            @error('startDate')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <p class="ml-1">Finish Date</p>
                            <input type="datetime-local" name="finishDate"
                                class="text-xl h-14 border-2 border-gray-500 cursor-pointer bg-homeInput text-black/[0.3] bg-opacity-70 w-full px-4 @error('finishDate') border-red-500 @enderror">
                            @error('finishDate')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-end @if ($errors->any()) items-center @endif">
                        <button type="submit"
                            class="bg-gradient-to-b from-OrangeA to-OrangeB rounded-r-2xl w-14 h-14 border-y-2 border-r-2 border-gray-500 cursor-pointer hover:opacity-80"><i
                                class="fa-solid fa-magnifying-glass fa-xl text-white"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
