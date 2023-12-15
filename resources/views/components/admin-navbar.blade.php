<div
    class="h-[10vh] {{ Route::current()->getName() == 'home' ? 'bg-transparent' : 'bg-Primary' }} fixed top-0 z-20 w-full border-b-2 {{ Route::current()->getName() == 'home' ? 'border-borbor' : 'border-slate-700' }}">
    <div class="container justify-between flex mx-auto h-full items-center">
        <a href="{{ route('admin.home') }}" class="h-full flex items-center">
            <img src="{{ Route::current()->getName() == 'home' ? '/images/white-logo.png' : '/images/logo.png' }}"
                class="h-3/4" alt="">
        </a>
        <ul class="flex items-center text-white text-xl gap-8">
            <li class="font-semibold"><a href="{{ route('admin.orders') }}">Orders</a></li>
            <li class="font-semibold"><a href="{{ route('admin.vehicle') }}">Vehicle</a></li>
            <li class="font-semibold"><a href="{{ route('admin.users') }}">Users</a></li>
            <li class="font-semibold"><a href="{{ route('admin.history') }}">History</a></li>
            <li class="flex">
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex items-center text-gray-white hover:text-gray-00 md:mr-0 " type="button">
                    <span class="sr-only">Open user menu</span>
                    <span class="gap-2 flex justify-center items-center">
                        @if (Auth::user()->image != null)
                            <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Profile Picture"
                                class="rounded-full aspect-square w-8">
                        @endif
                        <p class="text-xl font-semibold mb-1">{{ Auth::user()->name }}</p>
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
                        <div class="truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                        </li>
                    </ul>
                    <ul class="py-2 text-sm text-gray-700"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="" class="block px-4 py-2 hover:bg-gray-100">Change Password</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="{{ route('auth.logout') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                    </div>
                </div>

            </li>
        </ul>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
