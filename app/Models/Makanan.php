<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
   // app/Models/Makanan.php
protected $fillable = ['nama_makanan', 'deskripsi', 'harga', 'foto', 'role'];


}
