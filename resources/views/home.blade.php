<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
    <style>
        .labl > input{
            display: none;
            visibility: hidden;
        }
        .labl > div{
            cursor: pointer;
        }
        .labl > input:checked + div  {
            border-bottom: 2px solid #ffffff;
        }
    </style>
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center bg-cover bg-gray-500 bg-blend-multiply" 
    style="background-image: url('{{asset('image/bg-home.jpg')}}')"
    >
        <div class="space-y-24">
            <h1 class="text-center text-[48px] w-[900px] -mt-40 text-white shadow-inner">Explore Jakarta Anytime You Want With Our Rental Services!</h1>
            <div>
                <div class="grid grid-cols-3 text-center">
                    <label for="car" class="labl">
                        <input type="radio" id="car" name="vehicle_type" value="1">
                        <div class="text-white">
                            <i class="fa-solid fa-car text-4xl" style="color: #ffffff;"></i>
                            <p class="text-white">Car</p>
                        </div>
                    </label>
                    <label for="premium" class="labl">
                        <input type="radio" id="premium" name="vehicle_type" value="2">
                        <div class="text-white">
                            <i class="fa-solid fa-car-rear text-4xl" style="color: #ffffff;"></i>
                            <p class="text-white">Premium</p>
                        </div>
                    </label>
                    <label for="motorcycle" class="labl">
                        <input type="radio" id="motorcycle" name="vehicle_type" value="3">
                        <div class="text-white">
                            <i class="fa-solid fa-motorcycle text-4xl" style="color: #ffffff;"></i>
                            <p class="text-white">Motorcycle</p>
                        </div>
                    </label>
                </div>
                <br>
                <div class="flex justify-center">
                    <div class="grid grid-cols-5 text-gray-600">
                        <div class="w-full">
                            <p class="text-white ml-1">Rental Location</p>
                            <select name="location" id="" class="h-14 w-full border-2 border-gray-500 cursor-pointer bg-[#f3f3f3] bg-opacity-60 rounded-l-lg">
                                <option value="" disabled selected>Pick a Location</option>
                                <option value="Palmerah">Palmerah</option>
                                <option value="Kebon Jeruk">Kebon Jeruk</option>
                                <option value="Tanah Abang">Tanah Abang</option>
                            </select>
                        </div>
                        <div>
                            <p class="text-white ml-1">Start Date</p>
                            <input type="date" name="start-date" class="h-14 border-y-2 border-gray-500 cursor-pointer bg-[#f3f3f3] bg-opacity-60">
                        </div>
                        <div>
                            <p class="text-white ml-1">Start Time</p>
                            <input type="time" name="start-time" class="h-14 w-full border-2 border-gray-500 cursor-pointer bg-[#f3f3f3] bg-opacity-60">
                        </div>
                        <div>
                            <p class="text-white ml-1">Finish Date</p>
                            <input type="date" name="finish-date" class="h-14 border-y-2 border-gray-500 cursor-pointer bg-[#f3f3f3] bg-opacity-60">
                        </div>
                        <div>
                            <p class="text-white ml-1">Finish Time</p>
                            <input type="time" name="finish-time" class="h-14 w-full border-2 border-gray-500 cursor-pointer bg-[#f3f3f3] bg-opacity-60">
                        </div>
                    </div>
                    <div>
                        <p class="opacity-0">p</p>
                        <button class="bg-[#F6AA40] rounded-r-lg w-12 h-14 border-2 border-gray-500 cursor-pointer"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #ffffff;"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>