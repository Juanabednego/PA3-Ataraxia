<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatLayout extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat_id',
        'event_id',
        'section',
        'x',
        'y',
    ];
}
