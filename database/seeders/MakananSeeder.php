<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   

    public function run()
    {
        Makanan::create([
            'nama_makanan' => 'Es Teh Manis',
            'deskripsi' => 'Minuman teh manis dingin menyegarkan.',
            'harga' => 8000,
        ]);
    
        Makanan::create([
            'nama_makanan' => 'Nasi Goreng Spesial',
            'deskripsi' => 'Nasi goreng dengan telur, ayam, dan kerupuk.',
            'harga' => 18000,
        ]);
    }
    
}
