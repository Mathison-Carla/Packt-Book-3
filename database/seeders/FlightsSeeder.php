<?php

namespace Database\Seeders;

use App\Models\Flights;
use Illuminate\Database\Seeder;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'time_of_departure' => '12:00',
                'time_of_arrival' => '22:00',
                'destination' => 'New York',
                'airline' => 'american',
                'class' => 'economic',
                'origin' => 'San Francisco'
            ],
            [
                'time_of_departure' => '12:00',
                'time_of_arrival' => '22:00',
                'destination' => 'Alabama',
                'airline' => 'american',
                'class' => 'first class',
                'origin' => 'San Francisco'
            ],
            [
                'time_of_departure' => '12:00',
                'time_of_arrival' => '22:00',
                'destination' => 'Boston',
                'airline' => 'virgin',
                'class' => 'economic',
                'origin' => 'San Francisco'
            ],
            [
                'time_of_departure' => '12:00',
                'time_of_arrival' => '22:00',
                'destination' => 'Detroit',
                'airline' => 'american',
                'class' => 'first class',
                'origin' => 'San Francisco'
            ],
        ];

        Flights::insert($bookings);
    }
}
