import React, { useState } from 'react';
import { Link, Head } from '@inertiajs/react';


export default function SearchPage({
                                       onTransmissionChange,
                                       onFuelTypeChange,
                                       onBrandChange,
                                       onCapacityChange,
                                       onPriceStartChange,
                                       onPriceEndChange,
                                   }) {
    function unCheck() {
        var x = document.getElementsByClassName("checkbox");
        for (var i = 0; i < x.length; i++) {
            x[i].checked = false;
        }
        // window.location.reload();
    }

    return (
        <div className="flex drop-shadow mb-16 flex-col">
            <div className="flex justify-between">
                <p className="font-bold text-lg mb-1">Filter</p>
                <button className="text-sm text-gray-600" id="resetButton" onClick={unCheck}>Reset</button>
            </div>
            <div className="dropdown relative rounded drop-shadow w-[350px] bg-White hidden md:inline-block divide-y divide-lighGray">
                <div className="rounded-t py-5 px-4">
                    <h3 className="font-bold text-lg mb-2">Transmission</h3>
                    <ul className="text-base text-gray-700 flex flex-col gap-1">
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="automatic" onChange={(e) => onTransmissionChange('automatic', e.target.checked)} htmlFor="automatic" type="checkbox" value="automatic" name="transmission[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="automatic" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Automatic</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="manual" onChange={(e) => onTransmissionChange('manual', e.target.checked)} htmlFor="manual" type="checkbox" value="manual" name="transmission[]" className="checkbox  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="manual" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Manual</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div className="rounded-t py-5 px-4">
                    <h3 className="font-bold text-lg mb-2">Price Range</h3>
                    <ul className="text-base text-gray-700 flex justify-between">
                        <div className="flex w-[48%] items-center">
                            <input id="min" htmlFor="" onChange={(e) => onPriceStartChange(e.target.value)} type="number" placeholder="Minimum Price" name="min_price" className="checkbox w-full text-sm border-2 pl-8 h-8 rounded"/>
                            <label htmlFor="min" className="text-base aspect-square w-7 text-center flex justify-center ml-0.5 items-center absolute rounded-l-sm bg-borderColor font-semibold">Rp</label>
                        </div>
                        <div className="flex w-[48%] items-center">
                            <input id="max" htmlFor="" onChange={(e) => onPriceEndChange(e.target.value)} type="number" placeholder="Maximum Price" name="max_price" className="checkbox w-full text-sm border-2 pl-8 h-8 rounded"/>
                            <label htmlFor="max" className="text-base aspect-square w-7 text-center flex justify-center ml-0.5 items-center absolute rounded-l-sm bg-borderColor font-semibold">Rp</label>
                        </div>
                    </ul>
                </div>
                <div className="rounded-t py-5 px-4">
                    <h3 className="font-bold text-lg mb-2">Type of Fuel</h3>
                    <ul className="text-base text-gray-700 flex flex-col gap-1">
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="gasoline" onChange={(e) => onFuelTypeChange('gasoline', e.target.checked)} htmlFor="gasoline" type="checkbox" value="gasoline" name="fuel[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded" />
                                <label htmlFor="" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Gasoline</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="diesel" onChange={(e) => onFuelTypeChange('diesel', e.target.checked)} htmlFor="diesel" type="checkbox" value="diesel" name="fuel[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="diesel" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Diesel</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="hybrid" onChange={(e) => onFuelTypeChange('hybrid', e.target.checked)} htmlFor="hybrid" type="checkbox" value="hybrid" name="fuel[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="hybrid" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hybrid</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="electric" onChange={(e) => onFuelTypeChange('electric', e.target.checked)} htmlFor="electric" type="checkbox" value="electrix" name="fuel[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Electric</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div className="rounded-t py-5 px-4">
                    <h3 className="font-bold text-lg mb-2">Brand</h3>
                    <ul className="text-base text-gray-700 flex flex-col gap-1">
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="toyota" onChange={(e) => onBrandChange('toyota', e.target.checked)} htmlFor="toyota" type="checkbox" value="toyota" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="toyota" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Toyota</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="honda" onChange={(e) => onBrandChange('honda', e.target.checked)} htmlFor="honda" type="checkbox" value="honda" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="honda" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Honda</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="daihatsu" onChange={(e) => onBrandChange('daihatsu', e.target.checked)} htmlFor="daihatsu" type="checkbox" value="daihatsu" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="daihatsu" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Daihatsu</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="suzuki" onChange={(e) => onBrandChange('suzuki', e.target.checked)} htmlFor="suzuki" type="checkbox" value="suzuki" name="brand[]" className="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="suzuki" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Suzuki</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="nissan" onChange={(e) => onBrandChange('nissan', e.target.checked)} htmlFor="nissan" type="checkbox" value="nissan" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Nissan</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="mitsubishi" onChange={(e) => onBrandChange('mitsubishi', e.target.checked)} htmlFor="mitsubishi" type="checkbox" value="mitsubishi" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="mitsubishi" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mitsubishi</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="ferrari" onChange={(e) => onBrandChange('ferrari', e.target.checked)} htmlFor="ferrari" type="checkbox" value="ferrari" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="ferrari" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Ferrari</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="lexus" onChange={(e) => onBrandChange('lexus', e.target.checked)} htmlFor="lexus" type="checkbox" value="lexus" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="lexus" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Lexus</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="porsche" onChange={(e) => onBrandChange('porsche', e.target.checked)} htmlFor="porsche" type="checkbox" value="porsche" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="porsche" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Porsche</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="bmw" onChange={(e) => onBrandChange('bmw', e.target.checked)} htmlFor="bmw" type="checkbox" value="bmw" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="bmw" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">BMW</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="mercedes" onChange={(e) => onBrandChange('mercedes', e.target.checked)} htmlFor="mercedes" type="checkbox" value="mercedes" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="mercedes" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Mercedes</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="hyundai" onChange={(e) => onBrandChange('hyundai', e.target.checked)} htmlFor="hyundai" type="checkbox" value="hyundai" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="hyundai" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Hyundai</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="yamaha" onChange={(e) => onBrandChange('yamaha', e.target.checked)} htmlFor="yamaha" type="checkbox" value="yamaha" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="yamaha" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Yamaha</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="kawasaki" onChange={(e) => onBrandChange('kawasaki', e.target.checked)} htmlFor="kawasaki" type="checkbox" value="kawasaki" name="brand[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="kawasaki" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">Kawasaki</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div className="rounded-t py-5 px-4">
                    <h3 className="font-bold text-lg mb-2">Passenger Capacity</h3>
                    <ul className="text-base text-gray-700 flex flex-col gap-1">
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="one" onChange={(e) => onCapacityChange('one', e.target.checked)} htmlFor="one" type="checkbox" value="one" name="capacity[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="one" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">1</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="two" onChange={(e) => onCapacityChange('two', e.target.checked)} htmlFor="two" type="checkbox" value="two" name="capacity[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="two" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">2</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="three" onChange={(e) => onCapacityChange('three', e.target.checked)} htmlFor="three" type="checkbox" value="three" name="capacity[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="three" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">4</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="four" onChange={(e) => onCapacityChange('four', e.target.checked)} htmlFor="four" type="checkbox" value="four" name="capacity[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="four" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">5-6</label>
                            </div>
                        </li>
                        <li className="block">
                            <div className="flex items-center rounded hover:bg-gray-100">
                                <input id="five" onChange={(e) => onCapacityChange('five', e.target.checked)} htmlFor="five" type="checkbox" value="five" name="capacity[]" className="checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded"/>
                                <label htmlFor="five" className="w-full ml-2 text-sm font-medium text-gray-900 rounded">>6</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    );
}
