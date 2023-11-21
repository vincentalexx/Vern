import React, { useState } from "react";
import Filter from "../Components/Filter.jsx";
import Cards from "../Components/Cards.jsx";
export default function Search({ results, startDate, endDate }) {
    // Create Date objects
    const startDates = new Date(startDate);
    const endDates = new Date(endDate);

    // Format date and time
    const startFormatted = `${startDates.toDateString()} ${startDates.toLocaleTimeString()}`;
    const endFormatted = `${endDates.toDateString()} ${endDates.toLocaleTimeString()}`;

    // TRANSMISSION FILTERS
    const [transmissionFilters, setTransmissionFilters] = useState({
        automatic: false,
        manual: false,
    });


    const handleTransmissionChange = (type, checked) => {
        setTransmissionFilters((prevState) => ({
            ...prevState,
            [type]: checked,
        }));
    };

    // FUEL FILTERS
    const [fuelFilters, setFuelFilters] = useState({
        gasoline: false,
        diesel: false,
        hybrid: false,
        electric: false,
    });

    const handleFuelChange = (type, checked) => {
        setFuelFilters((prevState) => ({
            ...prevState,
            [type]: checked,
        }));
    };

    // BRAND FILTERS
    const [brandFilters, setBrandFilters] = useState({
        toyota: false,
        honda: false,
        daihatsu: false,
        suzuki: false,
        nissan: false,
        mitsubishi: false,
        ferrari: false,
        lexus: false,
        porsche: false,
        bmw: false,
        mercedes: false,
        hyundai: false,
        yamaha: false,
        kawasaki: false,
    });

    const handleBrandChange = (type, checked) => {
        setBrandFilters((prevState) => ({
            ...prevState,
            [type]: checked,
        }));
    };

    // PASSENGER CAPACITY FILTERS
    const [passengerCapacityFilters, setPassengerCapacityFilters] = useState({
        one: false,
        two: false,
        three: false,
        four: false,
        five: false,
    });

    const handlePassengerCapacityChange = (type, checked) => {
        setPassengerCapacityFilters((prevState) => ({
            ...prevState,
            [type]: checked,
        }));
    };

    // PRICE RANGE FILTERS
    const [priceStart, setPriceStart] = useState(0);
    const handlePriceStartChange = (e) => {
        setPriceStart(parseInt(e, 10));
    };

    const [priceEnd, setPriceEnd] = useState(0);
    const handlePriceEndChange = (e) => {
        setPriceEnd(parseInt(e, 10));
    };

    const filteredResults = results.filter((result) => {
        const meetsPriceRangeFilter =
            (priceStart === 0 && priceEnd === 0) || // Both are 0
            (priceStart === 0 &&
                priceEnd !== 0 &&
                result.price <= parseInt(priceEnd)) || // Only priceStart is 0
            (priceStart !== 0 &&
                priceEnd === 0 &&
                result.price >= parseInt(priceStart)) || // Only priceEnd is 0
            (priceStart !== 0 &&
                priceEnd !== 0 &&
                result.price >= parseInt(priceStart) &&
                result.price <= parseInt(priceEnd)); // Both are not 0

        const isAnyTransmissionFilterSelected = Object.values(
            transmissionFilters
        ).some((filter) => filter);

        const meetsTransmissionFilter = isAnyTransmissionFilterSelected
            ? (transmissionFilters.automatic &&
                  result.transmission === "Automatic") ||
              (transmissionFilters.manual && result.transmission === "Manual")
            : true;

        const isAnyFuelFilterSelected = Object.values(fuelFilters).some(
            (filter) => filter
        );

        const meetsFuelFilter = isAnyFuelFilterSelected
            ? (fuelFilters.gasoline && result.fuel === "Gasoline") ||
              (fuelFilters.diesel && result.fuel === "Diesel") ||
              (fuelFilters.hybrid && result.fuel === "Hybrid") ||
              (fuelFilters.electric && result.fuel === "Electric")
            : true;

        const isAnyBrandFilterSelected = Object.values(brandFilters).some(
            (filter) => filter
        );

        const meetsBrandFilter = isAnyBrandFilterSelected
            ? (brandFilters.toyota && result.brand === "Toyota") ||
              (brandFilters.honda && result.brand === "Honda") ||
              (brandFilters.daihatsu && result.brand === "Daihatsu") ||
              (brandFilters.suzuki && result.brand === "Suzuki") ||
              (brandFilters.nissan && result.brand === "Nissan") ||
              (brandFilters.mitsubishi && result.brand === "Mitsubishi") ||
              (brandFilters.ferrari && result.brand === "Ferrari") ||
              (brandFilters.lexus && result.brand === "Lexus") ||
              (brandFilters.porsche && result.brand === "Porsche") ||
              (brandFilters.bmw && result.brand === "BMW") ||
              (brandFilters.mercedes && result.brand === "Mercedes") ||
              (brandFilters.hyundai && result.brand === "Hyundai") ||
              (brandFilters.yamaha && result.brand === "Yamaha") ||
              (brandFilters.kawasaki && result.brand === "Kawasaki")
            : true;

        const isAnyCapacityFilterSelected = Object.values(
            passengerCapacityFilters
        ).some((filter) => filter);

        const meetsPassengerCapacityFilter = isAnyCapacityFilterSelected
            ? (passengerCapacityFilters.one && result.capacity === 1) ||
              (passengerCapacityFilters.two && result.capacity === 2) ||
              (passengerCapacityFilters.three && result.capacity === 4) ||
              (passengerCapacityFilters.four &&
                  result.capacity >= 5 &&
                  result.capacity <= 6) ||
              (passengerCapacityFilters.five && result.capacity > 6)
            : true;

        return (
            meetsTransmissionFilter &&
            meetsFuelFilter &&
            meetsBrandFilter &&
            meetsPassengerCapacityFilter &&
            meetsPriceRangeFilter
        );
    });

    // SORTING
    const [sortOption, setSortOption] = useState("none");

    const handleSortChange = (e) => {
        setSortOption(e.target.value);
    };

    const customSort = (a, b) => {
        switch (sortOption) {
            case "priceA":
                return a.price - b.price;
            case "priceB":
                return b.price - a.price;
            default:
                return 0;
        }
    };

    const sortedResults = [...filteredResults].sort(customSort);
    return (
        <div className="min-h-screen w-full h-screen container mx-auto my-10 text-gray pt-[10vh]">
            <div className="flex gap-8 w-full">
                <Filter
                    onTransmissionChange={handleTransmissionChange}
                    onFuelTypeChange={handleFuelChange}
                    onBrandChange={handleBrandChange}
                    onCapacityChange={handlePassengerCapacityChange}
                    onPriceStartChange={handlePriceStartChange}
                    onPriceEndChange={handlePriceEndChange}
                />
                <div className="flex flex-col w-full">
                    <div className="flex flex-col md:flex-row w-[100%] justify-between gap-4 md:gap-0">
                        <div className="flex flex-col">
                            <p className="text-4xl font-bold">Search Results</p>
                            <p>
                                {startFormatted} - {endFormatted}
                            </p>
                        </div>
                        <div className="flex gap-2 items-center">
                            <p className="font-semibold">Sort: </p>
                            <select
                                name="sort"
                                id="sort"
                                className="border px-3 py-1 border-sortBorder rounded-md bg-right min-w-[160px]"
                                onChange={handleSortChange}
                            >
                                <option value="" selected disabled hidden>
                                    Select an Option
                                </option>
                                <option value="priceA">
                                    Price (Ascending)
                                </option>
                                <option value="priceB">
                                    Price (Descending)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div className="flex flex-col">
                            <ul className="flex gap-[2.666666666666667%] flex-wrap">
                                {sortedResults.length > 0 ? (
                                    sortedResults.map((result) => (
                                        <li
                                            key={result.id}
                                            className="min-h-[270px] max-h-[300px] w-[23%]"
                                        >
                                            <Cards
                                                result={result}
                                                startDate={startDate}
                                                endDate={endDate}
                                            />
                                        </li>
                                    ))
                                ) : (
                                    <div>
                                        <p className="font-semibold text-4xl">
                                            No results found
                                        </p>
                                    </div>
                                )}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
