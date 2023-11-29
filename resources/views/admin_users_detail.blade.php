<!-- admin_order_detail.blade.php -->
@extends('layouts.app')
@section('title', 'User Detail')

@section('content')
    <div class="container mx-auto mt-8 pt-[15vh] text-gray-600">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.users') }}" class="cursor-pointer">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </a>
            <h1 class="text-Blue font-black mb-2 text-5xl">User Detail</h1>
        </div>
        <div class="mt-12 w-full">
            <div class="py-4 flex justify-between w-full">
                <div class="w-[40%] flex justify-center items-center rounded-lg border-2">
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Picture" class="rounded-lg">
                </div>
                <div class="w-[54%] flex flex-col gap-x-6">
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">User ID</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->id }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Google ID</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->google_id }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Name</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Date of Birth</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->dob }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Gender</label>
                            @if($user->gender)
                                <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="Male" readonly>
                            @elseif(!($user->gender))
                                <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="Female" readonly>
                            @endif
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Address</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->address }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Phone</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->phone }}" readonly>
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Email</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Password</label>
                            <input class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ $user->password }}" readonly>
                        </div>
                        <form method="POST" action="{{ route('admin.users.delete', ['user' => $user->id]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="flex flex-col">
                                <button type="submit" class="bg-OrangeB w-[400px] h-8 flex justify-center items-center text-white rounded-md hover:shadow-md mt-7 font-semibold">
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
