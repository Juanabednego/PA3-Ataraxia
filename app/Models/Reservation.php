<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'date', 'time', 'people', 'note', 'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}