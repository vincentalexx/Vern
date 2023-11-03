@extends('layouts.app')
@section('title', 'Search')

@section('content')
    <div class="min-h-screen h-screen container mx-auto my-10 text-Gray pt-[10vh]">
        <div class="flex gap-8">
            <div class="flex drop-shadow mb-16 flex-col">
                <div class="flex justify-between">
                    <p class="font-bold text-lg mb-1">Filter</p>
                    <button class="text-sm text-gray-600" id="resetButton">Reset</button>
                </div>
                <div
                    class="dropdown relative rounded drop-shadow w-[350px] bg-White hidden md:inline-block divide-y divide-lighGray">
                    <div class="rounded-t py-5 px-4">
                        <h3 class="font-bold text-lg mb-2">Transmission</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="automatic" type="checkbox" value="1" name="transmission[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="automatic"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Automatic</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="manual" type="checkbox" value="2" name="transmission[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="manual"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Manual</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-t py-5 px-4">
                        <h3 class="font-bold text-lg mb-2">Price Range</h3>
                        <ul class="text-base text-gray-700 flex justify-between">
                            <div class="flex w-[48%] items-center">
                                <input id="min" type="number" placeholder="Minimum Price" name="min_price"
                                    class="w-full text-sm border-2 pl-8 h-8 rounded">
                                <label for="min"
                                    class="text-base aspect-square w-7 text-center flex justify-center ml-0.5 items-center absolute rounded-l-sm bg-borderColor font-semibold">Rp</label>
                            </div>
                            <div class="flex w-[48%] items-center">
                                <input id="max" type="number" placeholder="Maximum Price" name="max_price"
                                    class="w-full text-sm border-2 pl-8 h-8 rounded">
                                <label for="max"
                                    class="text-base aspect-square w-7 text-center flex justify-center ml-0.5 items-center absolute rounded-l-sm bg-borderColor font-semibold">Rp</label>
                            </div>
                        </ul>
                    </div>
                    <div class="rounded-t py-5 px-4">
                        <h3 class="font-bold text-lg mb-2">Type of Fuel</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="gasoline" type="checkbox" value="1" name="fuel[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for=""
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Gasoline</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="diesel" type="checkbox" value="2" name="fuel[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="diesel"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Diesel</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="hybrid" type="checkbox" value="3" name="fuel[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="hybrid"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hybrid</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="" type="checkbox" value="4" name="fuel[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for=""
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Electric</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-t py-5 px-4">
                        {{-- TBD: kalo bisa render by data yang ada aja --}}
                        <h3 class="font-bold text-lg mb-2">Brand</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="toyota" type="checkbox" value="1" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="toyota"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="honda" type="checkbox" value="2" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="honda"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Honda</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="daihatsu" type="checkbox" value="3" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="daihatsu"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Daihatsu</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="suzuki" type="checkbox" value="4" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="suzuki"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Suzuki</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="toyota" type="checkbox" value="5" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="toyota"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="" type="checkbox" value="6" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for=""
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Nissan</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="mitsubishi" type="checkbox" value="7" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="mitsubishi"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mitsubishi</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="ferrari" type="checkbox" value="" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="ferrari"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Ferrari</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="lexus" type="checkbox" value="8" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="lexus"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Lexus</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="porsche" type="checkbox" value="9" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="porsche"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Porsche</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="bmw" type="checkbox" value="10" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="bmw"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">BMW</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="mercedes" type="checkbox" value="11" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="mercedes"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mercedes</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="hyundai" type="checkbox" value="" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="hyundai"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hyundai</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="" type="checkbox" value="" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for=""
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Yamaha</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="kawasaki" type="checkbox" value="12" name="brand[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="kawasaki"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">Kawasaki</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-t py-5 px-4">
                        <h3 class="font-bold text-lg mb-2">Passenger Capacity</h3>
                        <ul class="text-base text-gray-700 flex flex-col gap-1">
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="one" type="checkbox" value="1" name="capacity[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="one"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">1</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="two" type="checkbox" value="2" name="capacity[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="two"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="three" type="checkbox" value="3" name="capacity[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="three"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">4</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="four" type="checkbox" value="4" name="capacity[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="four"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">5-6</label>
                                </div>
                            </li>
                            <li class="block">
                                <div class="flex items-center rounded hover:bg-gray-100">
                                    <input id="five" type="checkbox" value="5" name="capacity[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                                    <label for="five"
                                        class="w-full ml-2 text-sm font-medium text-gray-900 rounded">>6</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @if ($results->isEmpty())
                <div class="w-full flex flex-col items-center mt-16">
                    <p class="text-2xl font-semibold">No results found</p>
                    <p class="text-lg">Please try again with different search criteria</p>
                </div>
            @else
                <div class="flex flex-col gap-6 mb-16 w-full">
                    <div class="flex flex-col md:flex-row justify-between gap-4 md:gap-0">
                        <div class="flex flex-col">
                            <p class="text-4xl font-bold">Search Results</p>
                            <p class="font-semibold">for {{ $results[0]->location->name }} •
                                {{ date('D, d M Y H:i', strtotime($startDate)) }} -
                                {{ date('D, d M Y H:i', strtotime($endDate)) }}</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <p class="font-semibold">Sort: </p>
                            <select name="sort" id="sort"
                                class="border px-3 py-1 border-sortBorder rounded-md bg-right min-w-[160px]">
                                <option value="featured">Featured</option>
                                <option value="price">Price</option>
                                <option value="rating">Rating</option>
                            </select>
                        </div>
                    </div>
                    {{-- TBD: flex wrap but fit by width --}}
                    <div class="flex flex-wrap justify-center md:justify-normal gap-8">
                        @foreach ($results as $result)
                            <a
                                href="{{ route('vehicle.detail', ['id' => $result->id, 'startDate' => $startDate, 'endDate' => $endDate]) }}">
                                <div class="flex flex-col rounded-md shadow-md px-2 py-4 my-auto gap-8">
                                    {{-- <img src="{{ asset('/images/vehicles/{{$results->image}}.png') }}" alt="" class="max-h-[180px]"> --}}
                                    <img src="{{ asset('/images/accord.png') }}" alt="" class="max-h-[120px] max-w-full">
                                    <div class="flex flex-col justify-between px-4 pt-2">
                                        <div class="flex flex-col gap-1">
                                            <p class="text-lg font-normal">{{ $result->fullname }}</p>
{{--                                            <div class="grid grid-cols-3 w-fit contents-center grid-flow-dense">--}}
{{--                                                <div class="w-min justify-self-center">--}}
{{--                                                    <i class="fa-solid fa-gears"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-span-2">--}}
{{--                                                    <small>{{ $result->transmission }}</small>--}}
{{--                                                </div>--}}
{{--                                                <div class="w-min justify-self-center">--}}
{{--                                                    <i class="fa-solid fa-gas-pump"></i>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-span-2">--}}
{{--                                                    <small>{{ $result->fuel }}</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="flex">
                                            <p class="text-lg font-bold">Rp. {{ rupiah($result->price) }}</p>
                                            <p class="text-lg font-bold">/ Day</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        const resetButton = document.getElementById('resetButton');
        resetButton.addEventListener('click', () => {
            document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
                checkbox.checked = false;
            });
        });
    </script>
@endsection
