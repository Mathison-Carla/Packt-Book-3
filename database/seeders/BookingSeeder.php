<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $bookings = [
            ['order_id' => \Str::random(9)],
            ['order_id' => \Str::random(9)],
            ['order_id' => \Str::random(9)],
            ['order_id' => \Str::random(9)],
            ['order_id' => \Str::random(9)],
            ['order_id' => \Str::random(9)],
        ];

        Booking::insert($bookings);
    }
}
