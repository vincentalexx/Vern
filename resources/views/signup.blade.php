@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
    <div class="w-screen h-[90vh] mt-[10vh] justify-center items-center flex">
        <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
            <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
                <div class="flex flex-col gap-y-2">
                    <div class="text-2xl flex">
                        <p class="font-bold">Sign up</p>
                    </div>
                    <a href="{{ route('auth.google') }}"
                        class="border border-sortBorder rounded-xl cursor-pointer w-full py-3 flex justify-center items-center gap-x-2">
                        <i class="fa-brands fa-google"></i>
                        <p class="text-xl font-semibold">Sign up with Google</p>
                    </a>
                </div>
                <form method="POST" action="{{ route('auth.signup') }}" class="flex flex-col py-2 gap-y-3">
                    @csrf
                    <div class="flex flex-col gap-y-2">
                        <label for="name" class="font-semibold text-xl">Name</label>
                        <input type="text" name="name" id="name"
                            class="border p-3 rounded-md @error('name') border-red-500 @else border-sortBorder @enderror"
                            placeholder="Full Name">
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
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
                            placeholder="At least 8 characters">
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-x-2 items-center pb-3">
                            <input type="checkbox" name="tnc" id="tnc">
                            <label for="tnc">I agree with <a href="#" class="text-OrangeA underline">Terms</a>
                                and
                                <a href="#" class="text-OrangeA underline">Privacy</a></label>
                        </div>
                        @error('tnc')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <button
                        class="rounded text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-semibold">
                        Sign up
                    </button>
                </form>
                <div class="py-6 text-center">
                    <p class="text-xl">Already have an account?</p>
                    <a href="{{ route('login') }}" class="text-xl text-OrangeA font-bold">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
