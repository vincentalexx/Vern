<div
    class="h-[10vh] {{ Route::current()->getName() == 'home' ? 'bg-transparent' : 'bg-Primary' }} fixed top-0 z-20 w-full border-b-2 {{ Route::current()->getName() == 'home' ? 'border-borbor' : 'border-slate-700' }}">
    <div class="container justify-between flex mx-auto h-full items-center">
        <a href="/home" class="h-full flex items-center">
            <img src="{{ Route::current()->getName() == 'home' ? '/images/white-logo.png' : '/images/logo.png' }}"
                class="h-3/4" alt="">
        </a>
        <ul class="flex items-center text-white text-xl gap-8">
            <li class="font-semibold"><a href="{{ route('home') }}">Rent</a></li>
            <li class="font-semibold"><a href="{{ route('history') }}">Orders</a></li>
            <li>
                <a href="{{ route('login') }}">
                    <button
                        class="bg-transparent font-bold py-1 px-5 text-base text-white ring-inset ring-2 ring-white rounded">
                        Log In
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ route('signup') }}">
                    <button
                        class="bg-gradient-to-b from-OrangeA to-OrangeB hover:opacity-80 font-bold py-1 px-5 text-base rounded">
                        Sign Up
                    </button>
                </a>
            </li>
        </ul>
    </div>
</div>
