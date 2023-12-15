<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERN - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--    BLADEWIND --}}
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    {{-- BLADEWIND DATEPICKER --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/css/app.css'])
    @stack('styles')
    @stack('scripts')
</head>

<body>
    @if (Auth::check())
        @if (Auth::user()->role == 1)
            <x-admin-navbar />
        @else
            <x-navbar />
        @endif
    @else
        <x-guestNavbar />
    @endif
    @yield('content')
</body>

</html>
