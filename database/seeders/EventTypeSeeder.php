<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypeSeeder extends Seeder
{
    public function run(): void
    {
        EventType::insert([
            ['name' => 'Birthday Parties'],
            ['name' => 'Anniversaries'],
            ['name' => 'Kitty Parties'],
            ['name' => 'Family Gatherings'],
            ['name' => 'Friends Get-together'],
            ['name' => 'Corporate Events'],
            ['name' => 'Surprise Events'],
            ['name' => 'Candle Light Dinner'],
            ['name' => 'Love Proposals'],
            ['name' => 'Bridal Shower'],
            ['name' => 'Bride to be'],
            ['name' => 'Date Nights'],
        ]);
    }
}