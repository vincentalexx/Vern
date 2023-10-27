<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
</head>

<body class="overflow-y-hidden">
    <x-navbar />
    <div class="container min-h-screen mt-[16vh] mx-auto h-screen flex text-Gray">

        <div class="w-1/2 flex flex-col gap-y-32">
            <div>
                <a href="/searchresult">
                    <i class="fa-solid fa-chevron-left text-3xl"></i>
                </a>
            </div>
            <img src="images/accord.png" class="max-w-[80%] self-center" alt="">
        </div>
        <div class="w-1/2 flex flex-col gap-8 divide-y-2 divide-borderColor overflow-y-scroll max-h-[75vh]">
            <div class="">
                <h1 class="font-bold text-4xl">Honda Accord 2023</h1>
                <p>Has been Rented 400+ times • <i class="fa-sharp fa-solid fa-star text-OrangeA"></i>4.5
                    (248 Ratings)</p>
                <h1 class="font-bold text-5xl mt-3">Rp. 900.000/Day</h1>
            </div>
            <div class="pt-8 flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <h3 class="font-bold">Color:</h3>
                    <div class="flex items-center gap-1 rounded-full border border-black px-2 py-0.5">
                        <div class="bg-blue-800 rounded-full w-4 h-4"></div>
                        <p class="font-semibold">Blue</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold">Features:</h3>
                    <ul class="flex gap-6">
                        <li class="flex items-center gap-1">
                            <i class="fa-solid fa-chair"></i>
                            <p>5-Seater</p>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="fa-solid fa-suitcase"></i>
                            <p>2 Pieces of Baggage</p>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="fa-solid fa-gas-pump"></i>
                            <p>Hybrid</p>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="fa-solid fa-chair"></i>
                            <p>Automatic</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-8">
                <h3 class="font-bold">Rent Now:</h3>
                <a href="/order">
                    <button
                        class="mt-1 py-1 w-28 text-xl font-semibold bg-gradient-to-b from-OrangeA to-OrangeB text-white rounded-md hover:opacity-80">Rent</button>
                </a>
            </div>
            <div class="pt-8">
                <h3 class="font-bold">Pick Up Location:</h3>
                <div class="flex items-center gap-1">
                    <p class="">Soekarno Hatta International Airport (CGK) • </p>
                    <a class="underline cursor-pointer">See on Maps</a>
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
