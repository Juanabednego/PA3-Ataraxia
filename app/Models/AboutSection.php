<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $table = 'about_sections';

    protected $fillable = [
        'image_url',
        'paragraph1',
        'paragraph2',
        'paragraph3',
        'image_position',
    ];
}
