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
    <div class="bg-gray-500 w-screen h-[10vh] text-center text-white">Navbar</div>
    <div class="container mx-auto my-10 text-[#00000099]">
        <div class="flex gap-8">
            <div class="bg-gray-500 w-[450px] h-[800px] text-center text-white hidden md:block">Filter</div>
            <div class="flex flex-col gap-6 w-full">
                <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-0">
                    <div class="flex flex-col">
                        <p class="text-4xl font-bold">Search Results</p>
                        <p>for Soekarno Hatta International Airport (CGK) • Thursday, 12 October 2023 09:00 -
                            Saturday,
                            14 October 2023</p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <p>Sort: </p>
                        <select name="sort" id="sort" class="border p-3 border-[#00000099] rounded-md">
                            <option value="featured">Featured</option>
                            <option value="price">Price</option>
                            <option value="rating">Rating</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center md:justify-normal gap-8">
                    @for ($x = 0; $x < 8; $x++)
                        <div class="flex flex-col rounded-md shadow-md">
                            <img src="{{ asset('honda_accord.png') }}" alt="" class="h-[180px] ">
                            <div class="flex justify-between px-4 pt-2 pb-4 gap-16">
                                <div class="flex flex-col gap-1">
                                    <p class="text-lg">Honda Accord 2023</p>
                                    <div class="grid grid-cols-3 w-fit contents-center grid-flow-dense">
                                        <div class="px-2 w-min justify-self-center">
                                            <i class="fa-solid fa-gears"></i>
                                        </div>
                                        <div class="col-span-2">
                                            <small>Automatic</small>
                                        </div>
                                        <div class="px-2 w-min justify-self-center">
                                            <i class="fa-solid fa-gas-pump"></i>
                                        </div>
                                        <div class="col-span-2">
                                            <small>Hybrid</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-lg">Rp. 900.000</p>
                                    <p class="text-sm text-right">/ Day</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>

</html>
