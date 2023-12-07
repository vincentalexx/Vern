import { useState } from "react";

export default function History({orders}){
    // console.log(orders)
    const onGoingState = orders.filter(order => order.status >= 1 && order.status <= 3);
    const historyState = orders.filter(order => order.status >= 4 && order.status <= 5);

    // FOR toLocaleString()
    const number = 1234567.89;


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

    // var statusText = ["Menunggu Pembayaran", " Menunggu Konfirmasi", "Sedang Berlangsung", "Selesai", "Dibatalkan"]
    var statusText = ["Waiting for Payment", "Waiting for Confirmation", "In Progress", "Completed", "Cancelled"];
    var statusField
    function orderStatus(order){
        if(order.status === 1){
            statusField = statusText[0]
        }
        if(order.status === 2){
            statusField = statusText[1]
        }
        if(order.status === 3){
            statusField = statusText[2]
        }
        if(order.status === 4){
            statusField = statusText[3]
        }
        if(order.status === 5){
            statusField = statusText[4]
        }
    }

    return(
        <div className="pb-14">
        <div className="container mx-auto text-Gray pt-[20vh]">
            <div className="flex flex-col gap-y-12">
                <div className="flex flex-row justify-between items-center">
                    <a href={`/home`}>
                        <i className="fa-solid fa-arrow-left-long fa-2xl"></i>
                    </a>
                    <h1 className="text-4xl font-bold">Orders</h1>
                    <div></div>
            </div>
            <div className="flex w-full flex-col md:flex-row gap-12">
                <div className="flex flex-col gap-y-2 w-full">
                    <p className="text-2xl font-bold">Ongoing</p>
                    <div
                    className="py-2 border-2 rounded-lg shadow-md w-full divide-solid divide-y-[2px] flex flex-col">
                        {onGoingState.toReversed().map((order) => {
                            return (
                            <li key={order.id} className="list-none">
                                <div className="" >
                                    <div className="flex justify-between items-center py-4 cursor-pointer px-6" onClick={() => open(order.id)} onload={orderStatus(order)}
>
                                        <div className="flex flex-col">
                                            <p className="text-3xl font-semibold">{order.vehicle.brand} { order.vehicle.model} {order.vehicle.year}</p>
                                            {/* <p className="text-base font-normal"> {order.start_time} - {order.end_time} • {order.total_price} • {statusField}</p> */}
                                            <p className="text-base font-semibold"> {order.start_time} • {statusField}</p>
                                        </div>
                                        <i className="arrow fa-solid fa-circle-chevron-down fa-2xl" id={order.id}/>
                                    </div>
                                    <div className="content hidden divide-solid divide-y-[0.5px] divide-[#00000099] transition-transform all duration-500 border-t-2" id={order.id}>
                                        <div className="px-12 py-4">
                                            <div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Name :</p>
                                                        <p className="text-sm pb-2">{order.name} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">ID NIK :</p>
                                                        <p className="text-sm pb-2">{order.id_nik} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">ID SIM :</p>
                                                        <p className="text-sm pb-2">{order.id_sim} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Phone :</p>
                                                        <p className="text-sm pb-2">{order.phone} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Email :</p>
                                                        <p className="text-sm pb-2">{order.email} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Year :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.year}</p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Vehicle :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.brand} { order.vehicle.model}</p>
                                                    </div>
                                                    <div>
                                                        <p className="status font-semibold text-sm">Status : </p>
                                                        <p className="text-sm pb-2">{statusField}</p>
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
                                                <p className="text-2xl font-semibold">Rp. {(order.total_price).toLocaleString()} </p>
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
                    className="py-2 border-2 rounded-lg shadow-md w-full divide-solid divide-y-[2px] divide-gray flex flex-col">
                        {historyState.toReversed().map((order) => {
                            return (
                            <li key={order.id} className="list-none">
                                <div className="" >
                                    <div className="flex justify-between items-center py-4 cursor-pointer px-6" onClick={() => open(order.id)} onload={orderStatus(order)}>
                                        <div className="flex flex-col">
                                            <p className="text-3xl font-semibold">{order.vehicle.brand} { order.vehicle.model} {order.vehicle.year}</p>
                                            {/* <p className="text-base font-normal"> {order.start_time} - {order.end_time} • {order.total_price} • {statusField}</p> */}
                                            <p className="text-base font-semibold"> {order.start_time} • {statusField}</p>
                                        </div>
                                        <i className="arrow fa-solid fa-circle-chevron-down fa-2xl" id={order.id}/>
                                    </div>
                                    <div className="content hidden divide-solid divide-y-[0.5px] divide-[#00000099] transition-all 0.3s border-t-2" id={order.id}>
                                        <div className="px-12 py-4">
                                            <div>
                                            <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Name :</p>
                                                        <p className="text-sm pb-2">{order.name} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">ID NIK :</p>
                                                        <p className="text-sm pb-2">{order.id_nik} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">ID SIM :</p>
                                                        <p className="text-sm pb-2">{order.id_sim} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Phone :</p>
                                                        <p className="text-sm pb-2">{order.phone} </p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Email :</p>
                                                        <p className="text-sm pb-2">{order.email} </p>
                                                    </div>
                                                    <div>
                                                        <p className="font-semibold text-sm">Year :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.year}</p>
                                                    </div>
                                                </div>
                                                <div className="grid grid-cols-2">
                                                    <div>
                                                        <p className="font-semibold text-sm">Vehicle :</p>
                                                        <p className="text-sm pb-2">{order.vehicle.brand} { order.vehicle.model}</p>
                                                    </div>
                                                    <div>
                                                        <p className="status font-semibold text-sm">Status : </p>
                                                        <p className="text-sm pb-2">{statusField}</p>
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
                                                <p className="text-2xl font-semibold">Rp. {(order.total_price).toLocaleString()} </p>
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
