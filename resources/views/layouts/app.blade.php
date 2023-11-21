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

{{-- Date Picker CDN--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">

    @vite(['resources/css/app.css'])
    @stack('styles')
    @stack('scripts')
</head>

<body>
    @if (Auth::check())
        <x-navbar />
    @else
        <x-guestNavbar />
    @endif
    @yield('content')

{{--    Date Picker--}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Initialize flatpickr with 30-minute interval -->
    <script>
        flatpickr("#datetime", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            minuteIncrement: 30
        });
    </script>
</body>

</html>
