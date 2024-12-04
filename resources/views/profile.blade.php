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
    @if (Auth::check() && Auth::user()->email != 'admin@gmail.com')
        <x-navbar />
    @elseif(Auth::check() && Auth::user()->email == 'admin@gmail.com')
        <x-admin-navbar />
    @endif
    <div class="justify-center items-center flex flex-col min-h-[100vh] h-[100vh] text-Gray w-screen pt-[10vh]">
        <h1 class="text-4xl underline font-bold mb-10 text-Gray underline-offset-2">Profile Data</h1>
        <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex w-full justify-center gap-16">
                <div>
                    <img src="{{Auth::user()->image == null ? '/images/generic.png' : '/storage/'.Auth::user()->image}}" alt="Profile Picture" class="border-2 rounded-lg broder-black w-[500px] h-[500px]">
                    <input type="file" name="image" id="image" accept="image/*">
                </div>
                <div>
                    <div class="flex flex-col font-semibold">
                        <div class="flex flex-col">
                            <label class="h-8 font-bold">Name</label>
                            <input type="text" name="name" id="name" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ Auth::user()->dob }}">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Gender</label>
                            <select name="gender" id="gender" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 pt-[2px] px-2">
                                <option value="1" @if(Auth::user()->gender === true) selected @endif>Male</option>
                                <option value="0" @if(Auth::user()->gender === false) selected @endif>Female</option>
                                <option value="" @if(Auth::user()->gender === null) selected @endif>Select Gender</option>
                            </select>
                        </div>



                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Address</label>
                            <input type="text" name="address" id="address" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ Auth::user()->address }}">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Phone</label>
                            <input type="text" name="phone" id="phone" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Email</label>
                            <input type="text" name="email" id="email" class="border-2 border-black rounded-md w-[400px] mb-3 h-8 px-2" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="flex flex-col">
                            <label class="h-7 font-bold">Password</label>
                            <input type="password" name="password" id="password" class="border-2 border-black rounded-md w-[400px] mb-3 h-8">
                        </div>
                    </div>
                    <div class="text-right mt-[7.4px]">
                        <button class="border-2 border-black h-10 w-24 font-semibold rounded-[4px] mr-2">Back</button>
                        <button type="submit" class="border-2 border-black hover:opacity-80 font-semibold rounded-[4px] h-10 w-36" >Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
