import { useState } from "react";

export default function History({orders}){
    // console.log(orders)
    const onGoingState = orders.filter(order => order.status >= 1 && order.status <= 3);
    const historyState = orders.filter(order => order.status > 4 && order.status <= 5);

    let [isOpen, setisOpen] = useState(false)

    const closeModel = () => {
        setisOpen(false);
    }
    
    var compContent = document.getElementsByClassName("content")
    var arrowIcon = document.getElementsByClassName("arrow")
    console.log(compContent)
    
    function open(id){
        for(var i = 0; i < compContent.length; i++){
            if(compContent[i].id === id){
                if(!compContent[i].classList.contains('hidden')){
                    compContent[i].classList.add("hidden");
                    arrowIcon[i].classList.add("fa-circle-chevron-down")
                    arrowIcon[i].classList.remove("fa-circle-chevron-up")
                }
                else {
                    compContent[i].classList.remove("hidden");
                    arrowIcon[i].classList.add("fa-circle-chevron-up")
                    arrowIcon[i].classList.remove("fa-circle-chevron-down")
                }
            }
        }
    }

    return(
        <div>
        <div className="container mx-auto my-10 text-Gray mt-28">
            <div className="flex flex-col gap-y-12">
                <div className="flex flex-row justify-between items-center">
                    <a href="{ route('home') }">
                    <i className="fa-solid fa-arrow-left-long fa-2xl"></i>
                </a>
                <h1 className="text-4xl font-bold">Orders</h1>
                <div></div>
            </div>
            <div className="flex w-full flex-col md:flex-row gap-12">
                <div className="flex flex-col gap-y-2 w-full">
                    <p className="text-2xl font-bold">Ongoing</p>
                    <div
                    className="py-2 border border-gray-300 rounded-lg shadow-md w-full divide-solid divide-y-[2px] divide-[#00000099] flex flex-col">
                        {onGoingState.map((order) => {
                            return (
                            <li key={order.id} className="list-none">
                                <div className="" >
                                    <div className="flex justify-between items-center py-4 cursor-pointer px-6" onClick={() => open(order.id)}
>
                                        <div className="flex flex-col">
                                            <p className="text-3xl font-semibold">{order.vehicle.brand} { order.vehicle.model} {order.vehicle.year}</p>
                                            <p className="text-base font-normal"> {order.start_time} - {order.end_time} • {order.total_price} </p>
                                        </div>
                                        <i className="arrow fa-solid fa-circle-chevron-down fa-2xl" id={order.id}/>
                                    </div>
                                    <div className="content hidden divide-solid divide-y-[0.5px] divide-[#00000099] transition-transform all duration-500 bg-slate-200" id={order.id}>
                                        <div className="px-12 py-4">
                                            <div>
                                                <p className="font-semibold text-sm">Name :</p>
                                                <p className="text-sm pb-2">{order.name} </p>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">ID NIK :</p>
                                                        <p className="text-sm pb-2">{order.id_nik} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">ID SIM :</p>
                                                        <p className="text-sm pb-2">{order.id_sim} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Phone :</p>
                                                        <p className="text-sm pb-2">{order.phone} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Email :</p>
                                                        <p className="text-sm pb-2">{order.email} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Vehicle :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.brand} { order.vehicle.model}</p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Year :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.year}</p>
                                                    </div>
                                                </div>
                                                <p className="font-semibold text-sm">Features :</p>
                                                <ul className="flex gap-6 text-sm py-2">
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-chair"></i>
                                                        <p>{ order.vehicle.capacity }-Seater</p>
                                                    </li>
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-gas-pump"></i>
                                                        <p>{ order.vehicle.fuel }</p>
                                                    </li>
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-gears"></i>
                                                        <p>{ order.vehicle.transmission }</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div className="flex py-2">
                                                <p className="text-sm font-semibold">Color : </p>
                                                <p className="text-sm pl-1">{order.vehicle.color}</p>
                                            </div>
                                        <div className="py-2 text-sm">
                                            <p className="font-semibold text-sm">Pick Up Location :</p>
                                            <div className="flex items-center gap-1">
                                                {/* <p className="">{ order.vehicle.location.name } • </p> */}
                                                <a href="{{ order.vehicle.location.link }}"
                                                    className="underline hover:underline-offset-2 duration-300">See
                                                    on Maps</a>
                                                    <i className="fa-solid fa-arrow-up rotate-45"></i>
                                                </div>
                                            </div>
                                            <div className="py-2 text-sm">
                                                <p className="font-semibold">Rental Duration :</p>
                                                <p className="text-sm mt-2">{ order.start_time } - { order.end_time } •  Days</p>
                                            </div>
                                            <div className="py-2">
                                                <p className="text-sm font-semibold">Grand Total :</p>
                                                <p className="text-2xl">{order.total_price} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            )
                        })}
                </div>
            </div>
            <div className="flex flex-col gap-y-2 w-full">
                <p className="text-2xl font-bold">History</p>
                <div
                    className="py-2 border border-gray-300 rounded-lg shadow-md w-full divide-solid divide-y-[2px] divide-[#00000099] flex flex-col">
                        {historyState.map((order) => {
                            return (
                            <li key={order.id} className="list-none">
                                <div className="" >
                                    <div className="flex justify-between items-center py-4 cursor-pointer px-6" onClick={() => open(order.id)}
>
                                        <div className="flex flex-col">
                                            <p className="text-3xl font-semibold">{order.vehicle.brand} { order.vehicle.model} {order.vehicle.year}</p>
                                            <p className="text-base font-normal"> {order.start_time} - {order.end_time} • {order.total_price}</p>
                                        </div>
                                        <i className="arrow fa-solid fa-circle-chevron-down fa-2xl" id={order.id}/>
                                    </div>
                                    <div className="content hidden divide-solid divide-y-[0.5px] divide-[#00000099] transition-all 0.3s bg-slate-200" id={order.id}>
                                        <div className="px-12 py-4">
                                            <div>
                                            <p className="font-semibold text-sm">Name :</p>
                                                <p className="text-sm pb-2">{order.name} </p>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">ID NIK :</p>
                                                        <p className="text-sm pb-2">{order.id_nik} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">ID SIM :</p>
                                                        <p className="text-sm pb-2">{order.id_sim} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Phone :</p>
                                                        <p className="text-sm pb-2">{order.phone} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Email :</p>
                                                        <p className="text-sm pb-2">{order.email} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Vehicle :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.brand} { order.vehicle.model}</p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Year :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.year}</p>
                                                    </div>
                                                </div>
                                                <p className="font-semibold text-sm">Features :</p>
                                                <ul className="flex gap-6 text-sm py-2">
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-chair"></i>
                                                        <p>{ order.vehicle.capacity }-Seater</p>
                                                    </li>
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-gas-pump"></i>
                                                        <p>{ order.vehicle.fuel }</p>
                                                    </li>
                                                    <li className="flex items-center gap-1">
                                                        <i className="fa-solid fa-gears"></i>
                                                        <p>{ order.vehicle.transmission }</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div className="flex py-2">
                                                <p className="text-sm font-semibold">Color : </p>
                                                <p className="text-sm pl-1">{order.vehicle.color}</p>
                                            </div>
                                        <div className="py-2 text-sm">
                                            <p className="font-semibold text-sm">Pick Up Location :</p>
                                            <div className="flex items-center gap-1">
                                                {/* <p className="">{ order.vehicle.location.name } • </p> */}
                                                <a href="{{ order.vehicle.location.link }}"
                                                    className="underline hover:underline-offset-2 duration-300">See
                                                    on Maps</a>
                                                    <i className="fa-solid fa-arrow-up rotate-45"></i>
                                                </div>
                                            </div>
                                            <div className="py-2 text-sm">
                                                <p className="font-semibold">Rental Duration :</p>
                                                <p className="text-sm mt-2">{ order.start_time } - { order.end_time } •  Days</p>
                                            </div>
                                            <div className="py-2">
                                                <p className="text-sm font-semibold">Grand Total :</p>
                                                <p className="text-2xl">{order.total_price} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            )
                        })}
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}