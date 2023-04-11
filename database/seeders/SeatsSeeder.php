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
     */
    public function run()
    {
        $seat = [
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
            ['seat_number' => \Str::random(4)],
        ];

        Seats::insert($seat);
    }
}
