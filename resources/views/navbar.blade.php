<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar BOSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-[10vh] bg-Primary w-full border-b-2 border-slate-700">
        <div class="container justify-between flex mx-auto h-full items-center">
            <img src="images/logo.png" class="h-[65px]" alt="">
            <ul class="flex items-center text-white text-xl gap-8">
                <li class="font-semibold">Rent</li>
                <li class="font-semibold">Orders</li>
                <li class="flex">
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-white hover:text-gray-00 md:mr-0 " type="button">
                        <span class="sr-only">Open user menu</span>
                        <span class="kiri gap-4">
                            <i class="fa-solid rounded-full fa-user-large fa-2xl" style="color: #ffffff;"></i>
                            Bonnie Green
                        </span>
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <div class="px-4 py-3 text-sm text-gray-900">
                            <div class="truncate">name@gmail.com</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>
