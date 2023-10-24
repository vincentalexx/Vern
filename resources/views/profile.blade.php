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
    <div class="justify-center items-center flex flex-col min-h-[100vh] h-[100vh] text-Gray w-screen pt-[10vh]">
        <h1 class="text-4xl underline font-bold mb-10 text-Gray underline-offset-2">Profile Data</h1>
        <div class="flex w-full justify-center gap-20">
            <div>
                <img src="images/saul.jpeg" alt="profile" class="border-2 broder-black w-[500px] h-[500px]">
                <button class="bg-gradient-to-b from-Orange to-orange-600 text-white hover:opacity-80 font-semibold mt-4 text-lg w-[500px] h-10 rounded-[4px]">Upload Photo</button>
            </div>
            <div class="">
                <div class="flex flex-col font-semibold">
                    <div class="flex flex-col">
                        <label class="h-8">Name :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="Vincent Alexander Haris">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Date of Birth :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="02 December 2003">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Gender :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="Male">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Address :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="Jl. Sandang no. 1">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Phone :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="1234567890">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Email :</label>
                        <input type="text" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" placeholder="vincentalexx03@gmail.com">
                    </div>
                    <div class="flex flex-col">
                        <label class="h-7">Password :</label>
                        <input type="password" class="border-2 border-black rounded-md w-[400px] mb-3 h-8" placeholder="">
                    </div>
                </div>
                <div class="text-right mt-[7.3px]">
                    <button class="border-2 border-black h-10 w-24 font-semibold rounded-[4px] mr-2">Back</button>
                    <button class="bg-gradient-to-b from-Orange to-orange-600 text-white hover:opacity-80 font-semibold rounded-[4px] h-10 w-36">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
