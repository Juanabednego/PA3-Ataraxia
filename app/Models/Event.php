<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

        
    protected $fillable = ['name','description', 'harga', 'date', 'image'];
    
    protected $casts = [
        'date' => 'datetime', // 👈 tambahkan ini
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
