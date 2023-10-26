<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'type_id' => 1,
                'location_id' => 1,
                'brand' => 'Honda',
                'model' => 'Mobilio',
                'year' => 2019,
                'color' => 'White',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '5',
                'price' => 100000,
                'image' => 'mobilio.jpg',
            ],
            [
                'type_id' => 1,
                'location_id' => 1,
                'brand' => 'Mitsubishi',
                'model' => 'Pajero Sport',
                'year' => 2021,
                'color' => 'Black',
                'transmission' => 'Manual',
                'fuel' => 'Diesel',
                'capacity' => '7',
                'price' => 300000,
                'image' => 'pajero.jpg',
            ],
            [
                'type_id' => 2,
                'location_id' => 1,
                'brand' => 'Toyota',
                'model' => 'Alphard',
                'year' => 2022,
                'color' => 'White',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '5',
                'price' => 500000,
                'image' => 'alphard.jpg',
            ],
        ];
        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
