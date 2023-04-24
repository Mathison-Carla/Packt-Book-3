<?php

namespace Database\Seeders;

use App\Models\Seats;
use Illuminate\Database\Seeder;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $seat = [
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
            ['seat_number' => \Str::random(4),'flight_id'=>random_int(1,4)],
        ];

        Seats::insert($seat);
    }
}
