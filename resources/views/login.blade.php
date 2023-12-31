@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="w-screen h-[90vh] mt-[10vh] flex items-center justify-center">
        <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
            <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
                <div class="flex flex-col gap-y-2">
                    <div class="text-2xl flex">
                        <p class="font-bold">Login</p>
                    </div>
                    <a href="{{ route('auth.google') }}"
                        class="border border-sortBorder rounded-xl cursor-pointer w-full py-3 flex justify-center items-center gap-x-2">
                        <i class="fa-brands fa-google"></i>
                        <p class="text-xl font-semibold">Login with Google</p>
                    </a>
                </div>
                <form method="POST" action={{ route('auth.login') }} class="flex flex-col py-2 gap-y-3">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <label for="email" class="font-semibold text-xl">Email</label>
                        <input type="email" name="email" id="email"
                            class="border p-3 rounded-md @error('email') border-red-500 @else border-sortBorder @enderror"
                            placeholder="your@email.com">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="password" class="font-semibold text-xl">Password</label>
                        <input type="password" name="password" id="password"
                            class="border p-3 rounded-md @error('password') border-red-500 @else border-sortBorder @enderror"
                            placeholder="*****">
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-row gap-x-2 items-center pb-3">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <button
                        class="text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-bold rounded">
                        Login
                    </button>
                    <a href="{{ route('password.email') }} " class="flex justify-center">Forgot Password?</a>
                </form>
                <div class="py-6 text-center">
                    <p class="text-center text-xl text-red-500 pb-6">{{ Session::pull('authError') }}</p>
                    <p class="text-xl">Don&apos;t have an account?</p>
                    <a href="{{ route('signup') }}" class="text-xl text-OrangeA font-bold">Sign up</a>
                </div>
            </div>
        </div>
    </div>

@endsection
