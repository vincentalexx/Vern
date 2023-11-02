<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="w-screen h-screen flex items-center justify-center">
    <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
        <form method="POST" action="{{ route('order.pay') }}"
            class="flex flex-col divide-solid divide-y-[1px] divide-sortBorder">
            <div class="flex justify-between py-4 items-center">
                @csrf
                <input type="hidden" name="id" value="{{ $order->id }}">
                <input type="hidden" name="metode" value="0" checked>
                <button onclick="window.history.back()"><i class="fa-solid fa-chevron-left text-3xl"></i></button>
                <p class="font-bold text-3xl">Payment Method</p>
                <div>
                </div>
            </div>
            <label for="cash" class="labl w-full">
                <input type="radio" id="cash" name="metode" value="1" class="hidden peer">
                <div class="flex space-x-6 py-8 items-center cursor-pointer peer-checked:bg-borderColor"> <i
                        class="fa-solid fa-rupiah-sign text-4xl px-2"></i>
                    <p class="text-2xl">Cash</p>
                </div>
            </label>
            <label for="online" class="labl w-full">
                <input type="radio" id="online" name="metode" value="2" class="hidden peer">
                <div class="flex space-x-6 py-8 items-center cursor-pointer peer-checked:bg-borderColor"> <i
                        class="fa-solid fa-building-columns text-4xl px-2"></i>
                    <p class="text-2xl">Online Payment</p>
                </div>
            </label>
            <div class="flex flex-col">
                @error('metode')
                    <p class="text-center text-red-500 text-xl pt-5">Please choose payment method!</p>
                @enderror
                <div class="flex justify-between items-center py-5">
                    <div class="flex flex-col">
                        <p>Grand Total:</p>
                        <p class="text-2xl font-bold">Rp. {{ rupiah($order->total_price) }}</p>
                    </div>
                    <button type="submit"
                        class="text-white text-center text-lg bg-gradient-to-b from-OrangeA to-OrangeB px-10 py-0.5 rounded-lg hover:opacity-80">
                        Pay
                    </button>
                </div>
            </div>
    </div>
</body>

</html>
