<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>

<body>
    <x-navbar />
    <div class="justify-center items-center flex h-[90vh] w-screen">
        <div class="grid grid-cols-2">
            <div>
                <img src="image/redcar.png" alt="profile" class="border-2 broder-black w-[350px] h-[350px]">
                <br>
                <button class="bg-gradient-to-b from-Orange to-orange-600 text-white hover:opacity-80 font-semibold w-[350px] h-10 rounded-[4px]">Upload Photo</button>
            </div>
            <div>
                <h1 class="text-2xl underline font-bold mb-3 text-Gray underline-offset-2">Profile Data</h1>
                <div class="flex gap-8">
                    <div class="w-[125px] grid font-semibold text-[19px]">
                        <label class="h-8">Name :</label>
                        <label class="h-7">Date of Birth :</label>
                        <label class="h-7">Gender :</label>
                        <label class="h-7">Address :</label>
                        <label class="h-7">Phone :</label>
                        <label class="h-7">Email :</label>
                        <label class="h-7">Password :</label>
                    </div>
                    <div class="grid">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="Vincent Alexander Haris">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="02 December 2003">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="Male">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="Jl. Sandang no. 1">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="1234567890">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8 px-2"
                            placeholder="vincentalexx03@gmail.com">
                        <input type="password" class="border-2 border-black rounded-md w-[280px] mb-3 h-8"
                            placeholder="">
                    </div>
                </div>
                <br>
                <div class="-mt-[2px] text-right">
                    <button class="border-2 border-black h-10 w-24 font-semibold rounded-[4px] mr-2">Back</button>
                    <button class="bg-gradient-to-b from-Orange to-orange-600 text-white hover:opacity-80 font-semibold rounded-[4px] h-10 w-36">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
