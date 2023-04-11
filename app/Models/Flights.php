<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    protected $table = 'flights';

    protected $fillable = ['time_of_departure','time_of_arrival','destination','airline','class','origin'];
}
