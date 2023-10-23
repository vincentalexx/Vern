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
    <div class="w-screen h-[90vh]">
        <div class="flex justify-center items-center w-full h-full">
            <div class="w-[80vw]">
                <div class="grid grid-cols-3 items-center">
                    <a href="/home">
                        <i class="fa-solid fa-chevron-left text-3xl" style="color: #000000; opacity: 0.7;"></i>
                    </a>
                    <h1 class="text-center text-black text-opacity-70 font-extrabold underline text-4xl mb-5">Your Order</h1>
                </div>
                <div class="grid grid-cols-2 ">
                    <div>
                        <h1 class="text-2xl font-bold mb-2">Order Details</h1>
                        <div class="border-2 w-[650px] h-[440px] rounded-xl shadow-lg py-5 px-7">
                            <div>
                                <label class="text-lg font-bold opacity-70">Full Name</label><br>
                                <input type="text" name="order_name" placeholder="John Doe" class="border-2 w-[590px] h-10 rounded-lg px-2 text-lg border-gray-400 mb-3 font-semibold">
                            </div>
                            <div>
                                <label class="text-lg font-bold opacity-70">NIK</label><br>
                                <input type="text" name="order_name" placeholder="XXXXXXXXXXXXXXXX" class="border-2 w-[590px] h-10 rounded-lg px-2 text-lg border-gray-400 mb-3 font-semibold">
                            </div>
                            <div>
                                <label class="text-lg font-bold opacity-70">Driver's License Number</label><br>
                                <input type="text" name="order_name" placeholder="XXXX-XXXX-XXXXXX" class="border-2 w-[590px] h-10 rounded-lg px-2 text-lg border-gray-400 mb-3 font-semibold">
                            </div>
                            <div>
                                <label class="text-lg font-bold opacity-70">Phone Number</label><br>
                                <input type="text" name="order_name" placeholder="+62-123-1234-1234" class="border-2 w-[590px] h-10 rounded-lg px-2 text-lg border-gray-400 mb-3 font-semibold">
                            </div>
                            <div>
                                <label class="text-lg font-bold opacity-70">Email</label><br>
                                <input type="email" name="order_name" placeholder="john_doe@gmail.com" class="border-2 w-[590px] h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <div>
                            <h1 class="text-2xl font-bold mb-2">Rental Details</h1>
                            <div class="border-2 w-[650px] h-[440px] rounded-xl shadow-lg py-5 px-7">
                                <h1 class="text-4xl border-b-2 border-black border-opacity-30 h-14 mb-3">Honda Accord 2023</h1>
                                <div class="border-b-2 border-black border-opacity-30 h-[73px] mb-3">
                                    <label class="text-sm font-bold opacity-70">Features :</label>
                                    <div class="flex items-center gap-5 opacity-70 mt-2">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-chair mr-1" style="color: #000000;"></i>
                                            <p class="text-sm">5-Seater</p>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-suitcase mr-1" style="color: #000000;"></i>
                                            <p class="text-sm">2 Piece of Baggage</p>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-gas-pump mr-1" style="color: #000000;"></i>
                                            <p class="text-sm">Hybrid</p>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-car-side mr-1" style="color: #000000;"></i>
                                            <p class="text-sm">Hybrid</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b-2 border-black border-opacity-30 h-[70px] mb-4">
                                    <label class="text-sm font-bold opacity-70">Pick Up Location :</label>
                                    <p class="text-sm mt-2">Soekarno Hatta International Airport (CGK) • <a href="" class="underline">See on The Map <i class="fa-solid fa-up-right-from-square" style="color: #000000;"></i></a></p>
                                </div>
                                <div class="border-b-2 border-black border-opacity-30 h-[70px] mb-4">
                                    <label class="text-sm font-bold opacity-70">Rental Duration :</label>
                                    <p class="text-sm mt-2">Thursday, 12 October 2023 09:00 - Saturday, 14 October 2023 • 2 Days </p>
                                </div>
                                <div>
                                    <label class="text-sm font-bold opacity-70">Grand Total :</label>
                                    <div class="flex">
                                        <p class="text-4xl font-semibold">RP. 1.800.000</p>
                                        <div class="-mt-[2px] text-">
                                            <button class="bg-[#F6AA40] rounded-[4px] h-10 w-32 tracking-widest text-white font-bold ml-[252px] hover:opacity-80">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>