<div class="h-[10vh] bg-Primary w-full border-b-2 border-slate-700">
    <div class="container justify-between flex mx-auto h-full items-center">
        <a href="/home">
            <img src="images/logo.png" class="h-[65px]" alt="">
        </a>
        <ul class="flex items-center text-white text-xl gap-8">
            <li class="font-semibold"><a href="#">Rent</a></li>
            <li class="font-semibold"><a href="/history">Orders</a></li>
            <li class="flex">


                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex items-center text-sm font-medium text-gray-white hover:text-gray-00 md:mr-0 "
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <span class="kiri gap-4">
                        <i class="fa-solid rounded-full fa-user-large fa-2xl" style="color: #ffffff;"></i>
                        Bonnie Green
                    </span>
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <div class="px-4 py-3 text-sm text-gray-900">
                        <div class="truncate">name@gmail.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
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
