<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <div class="justify-center items-center flex h-screen w-screen">
        <div class="grid grid-cols-2">
            <div>
                <img src="image/redcar.png" alt="profile" class="border-2 broder-black w-[350px] h-[350px]">
                <br>
                <button class="bg-[#F6AA40] w-[350px] h-10 rounded-[4px]">Upload Photo</button>
            </div>
            <div>
                <h1 class="text-2xl underline font-bold mb-3">Profile Data</h1>
                <div class="flex">
                    <div class="w-[120px] grid text-[19px]">
                        <label class="h-8">Name :</label>
                        <label class="h-7">Date of Birth :</label>
                        <label class="h-7">Gender :</label>
                        <label class="h-7">Address :</label>
                        <label class="h-7">Phone :</label>
                        <label class="h-7">Email :</label>
                        <label class="h-7">Password :</label>
                    </div>
                    <div class="grid">
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="Vincent Alexander Haris" disabled>
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="02 December 2003" disabled>
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="Male" disabled>
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="Jl. Sandang no. 1" disabled>
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="1234567890" disabled>
                        <input type="text" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="vincentalexx03@gmail.com" disabled>
                        <input type="password" class="border-2 border-black rounded-md w-[280px] mb-3 h-8" placeholder="" disabled>
                    </div>
                </div>
                <br>
                <div class="-mt-[2px]">
                    <button class="border-2 border-black h-10 w-20 rounded-[4px]">Back</button>
                    <button class="bg-[#F6AA40] rounded-[4px] h-10 w-32">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>