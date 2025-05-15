<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambah akun admin default
        User::updateOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('password123'), 
            'role' => 'admin'
        ]);

        // Jalankan seeder lainnya
        // $this->call([
        //     ReviewSeeder::class,
        //     AboutSectionSeeder::class,
        // ]);
    }
}
