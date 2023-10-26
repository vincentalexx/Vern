<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // ini passwordnya 'password'
        User::factory()->create([
            'name' => 'User 1',
            'email' => 'user1@email.com',
        ]);

        // kalo yang ini '1234'
        User::factory()->create([
            'name' => 'User 2',
            'email' => 'user2@email.com',
            'password' => '1234',
        ]);

        $this->call([
            TypeSeeder::class,
            LocationSeeder::class,
            VehicleSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
