<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'user_id' => 1,
                'vehicle_id' => 1,
                'start_time' => '2021-10-26 20:00:00',
                'end_time' => '2021-10-27 20:00:00',
                'name' => 'Akbar Maulana',
                'id_nik' => '1234567890',
                'id_sim' => '1234567890',
                'phone' => '081234567890',
                'email' => 'akbar@email.com',
                'total_price' => 1000000,
                'payment_type' => 1,
                'payment_ref' => '',
                'status' => 1,
            ]
        ];
        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}