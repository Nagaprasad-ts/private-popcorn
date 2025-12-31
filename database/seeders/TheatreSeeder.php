<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Theatre;

class TheatreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theatre::create([
            'name' => 'Studio One',
            'description' => '2-4 People',
            'base_price' => 1500,
            'offer_price' => 1200,
        ]);

        Theatre::create([
            'name' => 'Cinema Pro',
            'description' => '4-8 People',
            'base_price' => 2500,
            'offer_price' => 2000,
        ]);

        Theatre::create([
            'name' => 'Grand Hall',
            'description' => '8-15 People',
            'base_price' => 4000,
            'offer_price' => 3500,
        ]);
    }
}
