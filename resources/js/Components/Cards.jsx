import React from 'react';
import { Link } from 'react-router-dom';

export default function Cards({ result, startDate, endDate }) {
    return (
        <a href={`/vehicle/${result.id}?startDate=${startDate}&endDate=${endDate}`} className="block w-full h-full max-w-full">
            <div className="flex flex-col rounded-md shadow-md px-2 py-4 my-auto gap-8 h-full w-full">
                <img src="/images/accord.png" alt="" className="max-h-[120px] max-w-full" />
                <div className="flex flex-col justify-between px-4 pt-2">
                    <div className="flex flex-col gap-1">
                        <p className="text-lg font-normal">{result.brand} {result.model} {result.year}</p>
                    </div>
                    <div className="flex">
                        <p className="text-lg font-bold">Rp. {result.price}</p>
                        <p className="text-lg font-bold">/ Day</p>
                    </div>
                </div>
            </div>
        </a>
    );
}
