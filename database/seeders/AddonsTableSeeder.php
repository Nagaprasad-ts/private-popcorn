<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Addon;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addons = [
            ['name' => 'Popcorn Combo', 'price' => 150.00],
            ['name' => 'Soft Drink', 'price' => 50.00],
            ['name' => 'Chocolate', 'price' => 70.00],
            ['name' => 'VIP Seat Upgrade', 'price' => 300.00],
            ['name' => 'Birthday Cake', 'price' => 500.00],
            ['name' => 'Flower Bouquet', 'price' => 250.00],
        ];

        foreach ($addons as $addon) {
            Addon::create($addon);
        }
    }
}
