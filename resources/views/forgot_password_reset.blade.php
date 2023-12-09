<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Vern</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="w-screen h-screen flex items-center justify-center">
    <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
        <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
            <div class="flex flex-col gap-y-2">
                <div class="text-2xl flex justify-between">
                    <p class="font-bold">Reset Password</p>
                    <i class="fa-solid fa-xmark"></i>
                </div>

            </div>
            <form method="POST" action={{ route('password.update') }} class="flex flex-col py-2 gap-y-3" >
                @csrf
                <input type="hidden" name="token" value="{{request()->token}}" class="">
                <input type="hidden" name="email" value="{{request()->email}}" class="">
                <div class="flex flex-col gap-y-2">
                    <label for="password" class="font-semibold text-xl">Password</label>
                    <input type="password" name="password" id="password"
                        class="border p-3 rounded-md @error('password') border-red-500 @else border-sortBorder @enderror">
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="password" class="font-semibold text-xl">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="border p-3 rounded-md @error('password_confirmation') border-red-500 @else border-sortBorder @enderror">
                    @error('password_confirmation')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <button
                    class="text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-bold rounded">
                    Next
                </button>
                @if (session()->has('status'))
                    <div class="text-green-500 justify-center">
                        {{session()->get('status')}}
                    </div>
                @endif
            </form>
        </div>
    </div>
    {{-- end of modal --}}
</body>

</html>
