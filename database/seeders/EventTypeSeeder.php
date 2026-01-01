<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\EventType; // Don't forget to import the model

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventType::create(['name' => 'Movie Screening', 'description' => 'A classic movie viewing experience.']);
        EventType::create(['name' => 'Private Event', 'description' => 'Host your own private gathering.']);
        EventType::create(['name' => 'Corporate Event', 'description' => 'Professional meetings and presentations.']);
    }
}
