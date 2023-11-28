import React from 'react';
import { Link } from 'react-router-dom';

export default function Cards({ result, startDate, endDate }) {
    return (
        <a href={`/vehicle/${result.id}?startDate=${startDate}&endDate=${endDate}`} className="block w-full h-full max-w-full">
            <div className="flex-col rounded-md shadow-md px-2 py-4 my-auto h-full w-full flex justify-between">
                <div className="h-[70%] max-h-[70%] max-w-full flex justify-center items-center">
                    <img src={`/images/${result.image}`} alt="" className="max-h-full"/>
                </div>
                <div className="flex flex-col justify-between max-h-[28%] px-4 pt-2">
                    <div className="flex flex-col gap-1">
                        <p className="text-md font-semibold">{result.brand} {result.model} {result.year}</p>
                    </div>
                    <div className="flex">
                        <p className="text-lg font-bold">Rp. {(result.price).toLocaleString()}</p>
                        <p className="text-lg font-bold">/ Day</p>
                    </div>
                </div>
            </div>
        </a>
    );
}
