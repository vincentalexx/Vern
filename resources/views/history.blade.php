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

{{-- TBD: detail dropdown --}}

<body class="pt-[15vh]">
    <x-navbar />
    <div class="container mx-auto my-10 text-Gray ">
        <div class="flex flex-col gap-y-12">
            <div class="flex flex-row justify-between items-center">
                <a href="#">
                    <i class="fa-solid fa-arrow-left-long fa-2xl"></i>
                </a>
                <h1 class="text-4xl font-bold">Orders</h1>
                <div></div>
            </div>
            <div class="flex w-full flex-col md:flex-row gap-12">
                <div class="flex flex-col gap-y-2 w-full">
                    <p class="text-2xl font-bold">Ongoing</p>
                    <div
                        class="px-6 py-2 border rounded-lg shadow-md w-full divide-solid divide-y-[1px] divide-[#00000099] flex flex-col">
                        @for ($x = 0; $x < 3; $x++)
                            <div class="flex justify-between items-center py-4 cursor-pointer">
                                <div class="flex flex-col gap-2">
                                    <p class="text-3xl font-semibold">Honda Accord 2023</p>
                                    <p class="text-base font-normal">12 Oct 2023 - 14 Oct 2023 • Rp. 1.800.000</p>
                                </div>
                                <i class="fa-solid fa-circle-chevron-down fa-2xl"></i>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="flex flex-col gap-y-2 w-full">
                    <p class="text-2xl font-bold">History</p>
                    <div
                        class="px-6 py-2 border rounded-lg shadow-md w-full divide-solid divide-y-[1px] divide-[#00000099] flex flex-col">
                        @for ($x = 0; $x < 5; $x++)
                            <div class="flex justify-between items-center py-4 cursor-pointer">
                                <div class="flex flex-col gap-2">
                                    <p class="text-3xl font-semibold">Honda Accord 2023</p>
                                    <p class="text-base font-normal">12 Oct 2023 - 14 Oct 2023 • Rp. 1.800.000</p>
                                </div>
                                <i class="fa-solid fa-circle-chevron-down fa-2xl"></i>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
