<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Review;
use App\Models\User;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua user_id yang ada di tabel users
        $userIds = User::pluck('id')->toArray(); // Ambil semua ID user

        // Inisialisasi Faker
        $faker = Faker::create();

        // Buat 10 data review
        foreach (range(1, 10) as $index) {
            Review::create([
                'user_id' => $faker->randomElement($userIds), // Ambil user_id secara acak
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->sentence(10), // Misalnya, 10 kata
                'status' => 'pending',
                'is_hidden' => false, // Atau bisa disesuaikan
            ]);
        }
    }
}
