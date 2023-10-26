<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Bandara Soekarno Hatta',
                'link' => 'https://maps.app.goo.gl/oNmKni1MGFpn94KW9'
            ],
            [
                'name' => 'Bandara Halim Perdanakusuma',
                'link' => 'https://maps.app.goo.gl/YBhbhjJ8pnvtc1RJ6'
            ],
            [
                'name' => 'Stasiun Gambir',
                'link' => 'https://maps.app.goo.gl/DcZEnrnghWWGMgGx7'
            ],
            [
                'name' => 'Stasiun Pasar Senen',
                'link' => 'https://maps.app.goo.gl/tDVshgj4sPvBJP4s8'
            ],
            [
                'name' => 'Stasiun Jatinegara',
                'link' => 'https://maps.app.goo.gl/F1R2KP3ty79fPpEH7'
            ],
            [
                'name' => 'Stasiun Manggarai',
                'link' => 'https://maps.app.goo.gl/opjkUaiSzngMuGup6'
            ],
            [
                'name' => 'Terminal Kampung Rambutan',
                'link' => 'https://maps.app.goo.gl/9JB5HUJY92uGBKgP8'
            ],
            [
                'name' => 'Terminal Pulo Gadung',
                'link' => 'https://maps.app.goo.gl/Q6m7kFvvVQTfcopF7'
            ],
            [
                'name' => 'Terminal Kalideres',
                'link' => 'https://maps.app.goo.gl/eoDs4SNJosePbkY67'
            ]
        ];
        foreach($locations as $location){
            Location::create($location);
        }
    }
}
