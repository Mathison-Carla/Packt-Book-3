<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    protected $table = 'seats';

    protected $fillable = ['seat_number'];
}
