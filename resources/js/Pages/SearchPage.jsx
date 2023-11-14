import React, {useState} from 'react';
import Filter from './Filter.jsx';
import Cards from './Cards.jsx';
export default function SearchPage({ results, startDate, endDate }) {
    // TRANSMISSION FILTERS
    const [transmissionFilters, setTransmissionFilters] = useState({
        automatic: false,
        manual: false,
    })

    const handleTransmissionChange = (type, checked) => {
        setTransmissionFilters(prevState => ({
            ...prevState,
            [type]: checked,
        }));
    }

    // PRICE RANGE FILTERS


    // FUEL FILTERS
    const [fuelFilters, setFuelFilters] = useState({
        gasoline: false,
        diesel: false,
    });

    const handleFuelChange = (type, checked) => {
        setFuelFilters(prevState => ({
            ...prevState,
            [type]: checked,
        }));
    }

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
        setBrandFilters(prevState => ({
            ...prevState,
            [type]: checked,
        }));
    }

    // PASSENGER CAPACITY FILTERS
    const [passengerCapacityFilters, setPassengerCapacityFilters] = useState({
        one: false,
        two: false,
        three: false,
        four: false,
        five: false,
    });

    const handlePassengerCapacityChange = (type, checked) => {
        setPassengerCapacityFilters(prevState => ({
            ...prevState,
            [type]: checked,
        }));
    }


    const filteredResults = results.filter((result) => {
        const meetsTransmissionFilter =
            (!transmissionFilters.automatic || result.transmission === "Automatic") &&
            (!transmissionFilters.manual || result.transmission === "Manual");

        const meetsFuelFilter =
            (!fuelFilters.gasoline || result.fuel === "Gasoline") &&
            (!fuelFilters.diesel || result.fuel === "Diesel");

        const meetsBrandFilter =
            (!brandFilters.toyota || result.brand === "Toyota") &&
            (!brandFilters.honda || result.brand === "Honda") &&
            (!brandFilters.daihatsu || result.brand === "Daihatsu") &&
            (!brandFilters.suzuki || result.brand === "Suzuki") &&
            (!brandFilters.nissan || result.brand === "Nissan") &&
            (!brandFilters.mitsubishi || result.brand === "Mitsubishi") &&
            (!brandFilters.ferrari || result.brand === "Ferrari") &&
            (!brandFilters.lexus || result.brand === "Lexus") &&
            (!brandFilters.porsche || result.brand === "Porsche") &&
            (!brandFilters.bmw || result.brand === "BMW") &&
            (!brandFilters.mercedes || result.brand === "Mercedes") &&
            (!brandFilters.hyundai || result.brand === "Hyundai") &&
            (!brandFilters.yamaha || result.brand === "Yamaha") &&
            (!brandFilters.kawasaki || result.brand === "Kawasaki");

        const meetsPassengerCapacityFilter =
            (!passengerCapacityFilters.one || result.capacity === 1) &&
            (!passengerCapacityFilters.two || result.capacity === 2) &&
            (!passengerCapacityFilters.three || result.capacity === 4) &&
            (!passengerCapacityFilters.four || (result.capacity >= 5 && result.capacity <= 6)) &&
            (!passengerCapacityFilters.five || result.capacity > 6);

        return meetsTransmissionFilter && meetsFuelFilter && meetsBrandFilter && meetsPassengerCapacityFilter;
    });

    // SORTING
    const [sortOption, setSortOption] = useState("none");

    const handleSortChange = (e) => {
        setSortOption(e.target.value);
    };

    const customSort = (a, b) => {
        switch (sortOption) {
            case 'priceA':
                return a.price - b.price;
            case 'priceB':
                return b.price - a.price;
            default:
                return 0;
        }
    };

    const sortedResults = [...filteredResults].sort(customSort);
    return (
        <div className="min-h-screen w-full h-screen container mx-auto my-10 text-gray pt-[10vh]">
            <div className="flex gap-8 w-full">
                <Filter onTransmissionChange={handleTransmissionChange}
                        onFuelTypeChange={handleFuelChange}
                        onBrandChange={handleBrandChange}
                        onCapacityChange={handlePassengerCapacityChange}/>
                <div className="flex flex-col w-full">
                    <div className="flex flex-col md:flex-row w-[100%] justify-between gap-4 md:gap-0">
                        <div className="flex flex-col">
                            <p className="text-4xl font-bold">Search Results</p>
                            <p>{startDate} {endDate}</p>
                        </div>
                        <div className="flex gap-2 items-center">
                            <p className="font-semibold">Sort: </p>
                            <select name="sort" id="sort" className="border px-3 py-1 border-sortBorder rounded-md bg-right min-w-[160px]" onChange={handleSortChange}>
                                <option value="" selected disabled hidden>Select an Option</option>
                                <option value="priceA">Price (Ascending)</option>
                                <option value="priceB">Price (Descending)</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div className="flex flex-col ">
                            <ul className="flex gap-[2.666666666666667%] flex-wrap">
                                {sortedResults.map((result) => (
                                    <li key={result.id} className="min-h-[270px] max-h-[300px] w-[23%] ">
                                        <Cards result={result} startDate={startDate} endDate={endDate} />
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
