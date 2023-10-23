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

<body class="m-4">
    {{-- start of modal, TBD: form wrapper, hover for link & btn  --}}
    <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-[#00000099]">
        <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-[#00000099]">
            <div class="flex flex-col gap-y-2">
                <div class="text-2xl flex justify-between">
                    <p class="font-bold">Sign up</p>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div
                    class="border border-[#00000099] rounded-xl cursor-pointer w-full py-3 flex justify-center items-center gap-x-2">
                    <i class="fa-brands fa-google"></i>
                    <p class="text-xl">Sign up with Google</p>
                </div>
            </div>
            <div class="flex flex-col py-2 gap-y-3">
                <div class="flex flex-col gap-y-2">
                    <label for="name" class="font-semibold text-xl">Name</label>
                    <input type="text" name="name" id="name" class="border p-3 rounded-md border-[#00000099]"
                        placeholder="Full Name">
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="email" class="font-semibold text-xl">Email</label>
                    <input type="email" name="email" id="email" class="border p-3 rounded-md border-[#00000099]"
                        placeholder="your@email.com">
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="password" class="font-semibold text-xl">Password</label>
                    <input type="password" name="password" id="password"
                        class="border p-3 rounded-md border-[#00000099]" placeholder="At least 8 characters">
                </div>
                <div class="flex flex-row gap-x-2 items-center pb-3">
                    <input type="checkbox" name="tnc" id="tnc">
                    <label for="tnc">I agree with <a href="#" class="text-[#F6AA40] underline">Terms</a> and
                        <a href="#" class="text-[#F6AA40] underline">Privacy</a></label>
                </div>
                <button class="text-white text-center text-xl bg-gradient-to-b from-[#F6AA40] to-[#D9822D] py-4">
                    Sign up
                </button>
            </div>
            <div class="py-6 text-center">
                <p class="text-xl">Already have an account?</p>
                <a href="#" class="text-xl text-[#F6AA40]">Login</a>
            </div>
        </div>
    </div>
    {{-- end of modal --}}
</body>

</html>
