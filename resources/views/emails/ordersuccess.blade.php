<h1 style="text-align: center">
    VERN
</h1>
<p style="font-size: 18px">
    Your order has been placed
</p>
<p>
    Our UI/UX hasn't created the view yet, but here's your order details:
</p>
<div>
    <p>Start Time: {{ $order->start_time }}</p>
    <p>End Time: {{ $order->end_time }}</p>
</div>
<h4>Vehicle Details:</h4>
<div>
    <p>Name: {{ $order->vehicle->fullname }}</p>
    <p>Price: {{ $order->vehicle->price }}</p>
</div>
<h4>Order Details:</h4>
<div>
    <p>Name: {{ $order->name }}</p>
    <p>NIK: {{ $order->id_nik }}</p>
    <p>SIM: {{ $order->id_sim }}</p>
    <p>Phone: {{ $order->phone }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Total Price: Rp.{{ rupiah($order->total_price) }}</p>
    <p>Payment Type: @if ($order->payment_type == 1)
            Cash
        @elseif($order->payment_type == 2)
            Online Payment (Midtrans)
        @else
            None (ERROR)
        @endif
    </p>
    <p>Status: @if ($order->status == 1)
            Menunggu Pembayaran
        @elseif($order->status == 2)
            Menunggu Konfirmasi Admin
        @else
            Other (kok bisa sampe sini ya) </p>
    @endif
</div>
<div style="text-align: center">
    <h4>VERN</h4>
    <i>Explore
        Jakarta
        Anytime
        You
        Want With Our Rental Services!</i>
</div>
