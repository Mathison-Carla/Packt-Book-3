<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Seats extends Model
{
    protected $table = 'seats';

    protected $fillable = ['seat_number','flight_id'];

    public function flight(): BelongsTo
    {
        return $this->belongsTo(Flights::class,'flight_id','id');
    }
}
