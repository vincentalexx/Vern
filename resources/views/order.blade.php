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
                <a href="/card_details">
                    <i class="fa-solid fa-chevron-left text-3xl text-black text-opacity-70"></i>
                </a>
                <h1 class="text-center text-black text-opacity-70 font-extrabold underline text-4xl">
                    Your Order
                </h1>
            </div>
            <div class="flex flex-col md:flex-row md:justify-between w-full gap-8">
                <div class="w-1/2">
                    <h1 class="text-2xl font-bold mb-2">Order Details</h1>
                    <div class="border-2 w-full rounded-xl shadow-lg p-7 flex flex-col gap-3">
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" placeholder="John Doe"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" placeholder="XXXXXXXXXXXXXXXX"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="sim">Driver's License
                                Number</label>
                            <input type="text" name="sim" placeholder="XXXX-XXXX-XXXXXX" id="sim"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="phone_number">Phone
                                Number</label>
                            <input type="text" name="phone_number" placeholder="+62-123-1234-1234" id="phone_number"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-lg font-bold opacity-70 w-full" for="email">Email</label>
                            <input type="email" name="email" placeholder="john_doe@gmail.com" id="email"
                                class="border-2 w-full h-10 rounded-lg px-2 text-lg border-gray-400 font-semibold">
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div>
                        <h1 class="text-2xl font-bold mb-2">Rental Details</h1>
                        <div
                            class="border-2 w-full rounded-xl shadow-lg p-7 flex flex-col gap-4 divide-y divide-black divide-opacity-30">
                            <h1 class="text-4xl font-semibold">
                                Honda Accord 2023</h1>
                            <div class="pt-3">
                                <label class="text-sm font-bold opacity-70">Features :</label>
                                <div class="flex items-center gap-5 opacity-70 mt-2">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-chair mr-1 text-black"></i>
                                        <p class="text-sm">5-Seater</p>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-suitcase mr-1 text-black"></i>
                                        <p class="text-sm">2 Piece of Baggage</p>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-gas-pump mr-1 text-black"></i>
                                        <p class="text-sm">Hybrid</p>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-car-side mr-1 text-black"></i>
                                        <p class="text-sm">Automatic</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <label class="text-sm font-bold opacity-70">Pick Up Location :</label>
                                <p class="text-sm mt-2">Soekarno Hatta International Airport (CGK) • <a href=""
                                        class="underline">See on The Map <i
                                            class="fa-solid fa-up-right-from-square text-black"></i></a></p>
                            </div>
                            <div class="pt-3">
                                <label class="text-sm font-bold opacity-70">Rental Duration :</label>
                                <p class="text-sm mt-2">Thursday, 12 October 2023 09:00 - Saturday, 14 October 2023
                                    • 2 Days </p>
                            </div>
                            <div class="pt-3">
                                <label class="text-sm font-bold opacity-70">Grand Total :</label>
                                <div class="flex">
                                    <div class="w-full">
                                        <p class="text-4xl font-semibold">Rp. 1.800.000</p>
                                    </div>
                                    <div>
                                        <a href="/success">
                                            <button
                                                class="text-xl font-semibold bg-gradient-to-b from-OrangeA to-OrangeB text-white hover:opacity-80 rounded-md h-10 w-32 tracking-widest ">Continue</button>
                                        </a>
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
