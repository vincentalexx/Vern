<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

{{-- TBD: hover --}}

<body style="background: #F7F9FA">
    <x-navbar />
    <div class="min-h-[100vh] h-[100vh] container mx-auto my-10 text-Gray pt-[10vh]">
        <div class="flex gap-8">
            <div class="flex flex-col">
                <p class="font-bold text-lg mb-1">Filter</p>
                <div class="dropdown relative rounded drop-shadow w-[350px] bg-White hidden md:inline-block">

                    <div class="vehicle_type border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Vehicle Type</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="car" type="checkbox" value="1" name="type"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="car"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Car</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="premium" type="checkbox" value="2" name="type"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="premium"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Premium
                                        Car</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="motorcycle" type="checkbox" value="3" name="type"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="motorcycle"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Motorcycle</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="transmission border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Transmission</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Automatic</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Manual</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="price border-b-2 border-lighGray rounded-t py-[20px] max-w-[100%] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Price Range</h3>
                        <ul class="text-base text-gray-700 max-w-[100%] flex justify-between">
                            <div class="flex w-[48%] items-center">
                                <input id="min" type="number" placeholder="Minimum Price"
                                       class="w-[100%] text-sm border-2 pl-8 h-8 rounded">
                                <label for="min"
                                       class="text-base aspect-square w-7 text-center flex justify-center ml-[2px] items-center absolute rounded-l-[2px] bg-borderColor font-semibold">Rp</label>
                            </div>
                            <div class="flex w-[48%] items-center">
                                <input id="min" type="number" placeholder="Maximum Price"
                                       class="w-[100%] text-sm border-2 pl-8 h-8 rounded">
                                <label for="min"
                                       class="text-base aspect-square w-7 text-center flex justify-center ml-[2px] items-center absolute rounded-l-[2px] bg-borderColor font-semibold">Rp</label>
                            </div>
                        </ul>
                    </div>
                    <div class="date border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Date Range</h3>
                        <ul class="text-base text-gray-700 max-w-[100%] flex justify-between">
                            <div class="flex w-[48%]">
                                <input id="min" type="date" placeholder="Minimum Price"
                                       class="w-[100%] placeholder:text-borderColor text-sm border-2 text-left h-8 rounded px-1">
                            </div>
                            <div class="flex w-[48%]">
                                <input id="min" type="date" placeholder="Minimum Price"
                                       class="w-[100%] text-sm border-2 h-8 placeholder-borderColor rounded text-left px-1">
                            </div>
                        </ul>
                    </div>
                    <div class="fuel border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Type of Fuel</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Gasoline</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Diesel</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hybrid</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Electric</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="brand border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Brand</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Honda</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Daihatsu</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Suzuki</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Nissan</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mitsubishi</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Ferrari</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Lexus</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Porsche</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">BMW</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mercedes</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hyundai</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Yamaha</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Kawasaki</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="passanger rounded-b py-[20px] px-[15px]">
                        <h3 class="font-bold text-lg mb-2">Passenger Capacity</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">1</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">4</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">5-6</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="checkbox-item" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="checkbox-item"
                                           class="w-full ml-2 text-sm font-medium text-gray-900 rounded">>6</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 w-full">
                <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-0">
                    <div class="flex flex-col">
                        <p class="text-4xl font-bold">Search Results</p>
                        <p class="font-semibold">for Soekarno Hatta International Airport (CGK) • Thursday, 12 October 2023 09:00 -
                            Saturday,
                            14 October 2023</p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <p class="font-semibold">Sort: </p>
                        <select name="sort" id="sort" class="border px-3 py-1 border-[#00000099] rounded-md bg-right">
                            <option value="featured">Featured</option>
                            <option value="price">Price</option>
                            <option value="rating">Rating</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center md:justify-normal gap-8">
                    @for ($x = 0; $x < 8; $x++)
                        <a href="/card_details">
                            <div class="flex flex-col rounded-md shadow-md">
                                <img src="{{ asset('honda_accord.png') }}" alt="" class="h-[180px] ">
                                <div class="flex justify-between px-4 pt-2 pb-4 gap-16">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-lg font-semibold">Honda Accord 2023</p>
                                        <div class="grid grid-cols-3 w-fit contents-center grid-flow-dense">
                                            <div class="w-min justify-self-center">
                                                <i class="fa-solid fa-gears"></i>
                                            </div>
                                            <div class="col-span-2">
                                                <small>Automatic</small>
                                            </div>
                                            <div class="w-min justify-self-center">
                                                <i class="fa-solid fa-gas-pump"></i>
                                            </div>
                                            <div class="col-span-2">
                                                <small>Hybrid</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-lg font-semibold">Rp. 900.000</p>
                                        <p class="text-sm text-right">/ Day</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>

</html>
