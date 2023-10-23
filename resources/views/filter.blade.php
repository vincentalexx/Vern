<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .show {
            display: block;
        }
    </style>
</head>
<body class="text-Gray w-full h-full p-20">
    <div class="dropdown relative rounded drop-shadow inline-block w-[350px] bg-White">
        <div class="vehicle_type border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Vehicle Type</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Car</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Premium Car</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Motorcycle</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="transmission border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Transmission</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Automatic</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Manual</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="price border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Price Range</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
            </ul>
        </div>
        <div class="date border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Date Range</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
            </ul>
        </div>
        <div class="fuel border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Type of Fuel</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Gasoline</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Diesel</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hybrid</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Electric</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="brand border-b-2 border-lighGray rounded-t py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Brand</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Honda</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Daihatsu</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Suzuki</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Nissan</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mitsubishi</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Ferrari</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Lexus</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Porsche</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">BMW</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mercedes</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hyundai</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Yamaha</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Kawasaki</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="passanger rounded-b py-[20px] px-[15px]">
            <h3 class="font-bold text-lg mb-2">Passenger Capacity</h3>
            <ul class="text-base text-gray-700 flex flex-col gap-1">
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">1</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">4</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">5-6</label>
                    </div>
                </li>
                <li class="block">
                    <div class="flex items-center rounded hover:bg-gray-100">
                        <input id="checkbox-item" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                        <label for="checkbox-item" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">>6</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function myFunction() {
            console.log("Button clicked");
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            console.log("Window clicked");
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
