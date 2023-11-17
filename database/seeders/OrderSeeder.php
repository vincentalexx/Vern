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
                'user_id' => 2,
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
            ],
            [
                'user_id' => 2,
                'vehicle_id' => 2,
                'start_time' => '2021-10-30 20:00:00',
                'end_time' => '2021-11-01 20:00:00',
                'name' => 'John Asep',
                'id_nik' => '0987654321',
                'id_sim' => '0987654321',
                'phone' => '0810987654321',
                'email' => 'john@email.com',
                'total_price' => 2000000,
                'payment_type' => 1,
                'payment_ref' => '',
                'status' => 4,
            ],
            [
                'user_id' => 2,
                'vehicle_id' => 3,
                'start_time' => '2021-11-02 20:00:00',
                'end_time' => '2021-11-03 20:00:00',
                'name' => 'Buddy Rachmat',
                'id_nik' => '1234598765',
                'id_sim' => '1234598765',
                'phone' => '0811234598765',
                'email' => 'buddy@email.com',
                'total_price' => 1000000,
                'payment_type' => 1,
                'payment_ref' => '',
                'status' => 5,
            ],
        ];
        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
