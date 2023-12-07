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
  <title>Change Password</title>
</head>
<body class="w-screen h-screen flex items-center justify-center">
  <form action="{{route('update_password')}}" id="change_password_form" method="post">
    @csrf
    <div class="border-2 border-gray-400 rounded-xl w-[500px] py-4 px-6 text-sortBorder">
      <div class="flex flex-col gap-y-3 divide-solid divide-y-[1px] divide-sortBorder">
        <div class="flex gap-y-2">
          <p class="font-bold text-2xl">Change Password</p>
        </div>
        <div class="flex flex-col py-2 gap-y-3">
            <div class="">
              <div class="flex flex-col">
                <label class="font-semibold text-lg">Old Password</label>
                <input type="password" name="old_password" class="border p-3 rounded-md @error('old_password') border-red-500 @else border-sortBorder @enderror" id="old_password" >
              </div>
              @if($errors->any('old_password'))
              <span class="text-red-500">{{$errors->first('old_password')}}</span>
              @endif
          </div>
          <div class="">
            <div class="flex flex-col">
              <label class="font-semibold text-lg" for="password">New Password</label>
              <input type="password" name="new_password" class="border p-3 rounded-md @error('new_password') border-red-500 @else border-sortBorder @enderror" id="new_password" >
            </div>
            @if($errors->any('new_password'))
              <span class="text-red-500">{{$errors->first('new_password')}}</span>
              @endif
          </div>
          <div class="flex flex-col">
            <label class="font-semibold text-lg" ="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" class="border p-3 rounded-md @error('confirm_password') border-red-500 @else border-sortBorder @enderror" id="confirm_password" >
            @if($errors->any('confirm_password'))
            <span class="text-red-500">{{$errors->first('confirm_password')}}</span>
            @endif
          </div>
          
          <button type="submit" class="text-white text-center text-xl bg-gradient-to-b from-OrangeA to-OrangeB py-4 font-bold rounded">Update Password</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>