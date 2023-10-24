<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
</head>

<body>
<x-navbar />
    <div class="w-full min-h-[100vh] h-[100vh] flex flex-col justify-center gap-4 items-center text-Gray pt-[10vh]">
        <div class="rounded-full w-32 h-32  bg-gradient-to-b from-light-green-700-accent to-green-500 drop-shadow-lg flex items-center justify-center">
            <i class="fa-solid fa-check ml-2 mt-1 text-7xl" style="color: #ffffff;"></i>
        </div>
        <div class="gap-1 flex flex-col text-center">
            <h1 class="font-bold text-4xl">Your Order Has Been Booked</h1>
            <h3 class="font-semibold text-xl">An automated booking receipt will be sent to your registered email.</h3>
            <a href="/home">
                <h2 class="text-Orange underline text-2xl font-semibold">Back to Home</h2>
            </a>
        </div>
    </div>
</body>
</html>
