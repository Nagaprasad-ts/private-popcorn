<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Theatre;
use App\Models\Slot;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $theatres = Theatre::all();

        foreach ($theatres as $theatre) {
            Slot::create([
                'theatre_id' => $theatre->id,
                'time_slot' => '(10 AM - 1 PM)',
                'start_time' => '10:00:00',
                'end_time' => '13:00:00',
            ]);

            Slot::create([
                'theatre_id' => $theatre->id,
                'time_slot' => '(2 PM - 5 PM)',
                'start_time' => '14:00:00',
                'end_time' => '17:00:00',
            ]);

            Slot::create([
                'theatre_id' => $theatre->id,
                'time_slot' => '(6 PM - 9 PM)',
                'start_time' => '18:00:00',
                'end_time' => '21:00:00',
            ]);
        }
    }
}
