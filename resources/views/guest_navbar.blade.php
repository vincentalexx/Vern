<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-[10vh] bg-Primary w-full border-b-2 border-slate-700">
        <div class="container justify-between flex mx-auto h-full items-center">
            <img src="images/logo.png" class="h-[65px]" alt="">
            <ul class="flex items-center text-white text-xl gap-4">
                <li class="font-semibold">Rent</li>
                <li class="font-semibold">Orders</li>
                <li>
                    <button class="bg-transparent font-bold py-1 w-[85px] text-base text-white ring-inset ring-2 ring-white px-2 rounded">
                        Log In
                    </button>
                </li>
                <li>
                    <button class="bg-Orange font-bold py-1 text-base w-[85px] px-2 rounded">
                        Sign Up
                    </button>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
