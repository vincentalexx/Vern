@extends('layouts.app')
@section('title', 'Admin History')
@push('styles')

@endpush

@section('content')
    <div class="flex justify-center items-center w-full h-full pt-[10vh]">
        <div class="container pt-20">
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('admin.home') }}" class="cursor-pointer">
                    <i class="fa-solid fa-chevron-left text-3xl"></i>
                </a>
                <h1 class="text-Blue font-black mb-2 text-5xl">Users Records</h1>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                    <thead class="text-xs uppercase bg-gray-300 text-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date of Birth
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gender
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Detail</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr class="border-gray-700 hover:bg-gray-50">
                            <th scope="row" class="pl-4 py-4">
                                {{ $user->id }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $user->dob }}
                            </td>
                            <td class="px-4 py-4">
                                @if($user->gender)
                                    Male
                                @elseif(!($user->gender))
                                    Female
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $user->address }}
                            </td>
                            <td class="px-4 py-4 text-right flex">
                                <a href="{{ route('admin.users.detail', ['user' => $user->id]) }}" class="font-medium text-Blue hover:underline">Detail</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
