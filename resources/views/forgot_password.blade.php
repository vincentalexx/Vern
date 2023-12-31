@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')

    <div class="w-screen h-[90vh] mt-[10vh] flex items-center justify-center">
        <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
            <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
                <div class="flex flex-col gap-y-2">
                    <div class="text-2xl flex justify-between">
                        <p class="font-bold">Forgot Password</p>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>

                <form method="POST" action={{ route('password.email') }} class="flex flex-col py-2 gap-y-3">
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
                    <button
                        class="text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-bold rounded">
                        Next
                    </button>
                    @if (session()->has('status'))
                        <div class="text-green-500 justify-center">
                            {{ session()->get('status') }}
                        </div>
                    @endif
                </form>
                <div class="py-6 text-center flex flex-col">
                    <span class="text-xl">Return to
                        <a href="{{ route('login') }}" class="text-xl text-OrangeA font-bold">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
