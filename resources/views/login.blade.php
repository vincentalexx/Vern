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
        <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
            <div class="flex flex-col gap-y-2">
                <div class="text-2xl flex justify-between">
                    <p class="font-bold">Login</p>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div
                    class="border border-sortBorder rounded-xl cursor-pointer w-full py-3 flex justify-center items-center gap-x-2">
                    <i class="fa-brands fa-google"></i>
                    <p class="text-xl font-semibold">Login with Google</p>
                </div>
            </div>
            <form method="POST" action={{ route('auth.login') }} class="flex flex-col py-2 gap-y-3">
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
                <div class="flex flex-col gap-y-2">
                    <label for="password" class="font-semibold text-xl">Password</label>
                    <input type="password" name="password" id="password"
                        class="border p-3 rounded-md @error('password') border-red-500 @else border-sortBorder @enderror"
                        placeholder="*****">
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-row gap-x-2 items-center pb-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <button
                    class="text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-bold rounded">
                    Login
                </button>
            </form>
            <div class="py-6 text-center">
                <p class="text-center text-xl text-red-500 pb-6">{{ Session::pull('authError') }}</p>
                <p class="text-xl">Don&apos;t have an account?</p>
                <a href="{{ route('signup') }}" class="text-xl text-OrangeA font-bold">Sign up</a>
            </div>
        </div>
    </div>
    {{-- end of modal --}}
</body>

</html>
