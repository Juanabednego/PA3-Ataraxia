<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'rating', 'comment', 'status'];

    // Relasi dengan tabel users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

