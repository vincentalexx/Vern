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
                'image' => 'mobilio.png',
            ],
            [
                'type_id' => 1,
                'location_id' => 1,
                'brand' => 'Honda',
                'model' => 'Accord',
                'year' => 2022,
                'color' => 'Blue',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '5',
                'price' => 850000,
                'image' => 'accord.png',
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
                'image' => 'pajero.jpeg',
            ],
            [
                'type_id' => 1,
                'location_id' => 1,
                'brand' => 'Toyota',
                'model' => 'Avanza',
                'year' => 2020,
                'color' => 'White',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '5',
                'price' => 150000,
                'image' => 'avanza.png',
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
                'image' => 'alphard.png',
            ],
            [
                'type_id' => 3,
                'location_id' => 1,
                'brand' => 'Yamaha',
                'model' => 'Vario',
                'year' => 2017,
                'color' => 'Black',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '2',
                'price' => 70000,
                'image' => 'yamaha_vario.png',
            ],
            [
                'type_id' => 3,
                'location_id' => 1,
                'brand' => 'Honda',
                'model' => 'Beat',
                'year' => 2017,
                'color' => 'Red',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '2',
                'price' => 60000,
                'image' => 'honda_beat.png',
            ],
            [
                'type_id' => 2,
                'location_id' => 1,
                'brand' => 'Mercedes',
                'model' => 'S450',
                'year' => 2019,
                'color' => 'Black',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'capacity' => '5',
                'price' => 2300000,
                'image' => 's_class.png',
            ],


        ];
        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
