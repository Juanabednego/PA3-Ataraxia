<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    public function run()
    {
        DB::table('footers')->insert([
            [
                'section' => 'address',
                'content' => json_encode([
                    'street' => 'A108 Adam Street',
                    'city' => 'New York',
                    'zip' => 'NY 535022',
                ]),
            ],
            [
                'section' => 'contact',
                'content' => json_encode([
                    'phone' => '+1 5589 55488 55',
                    'email' => 'info@example.com',
                ]),
            ],
            [
                'section' => 'opening_hours',
                'content' => json_encode([
                    'mon_sat' => '11AM - 11PM',
                    'sunday' => 'Closed',
                ]),
            ],
            [
                'section' => 'social_links',
                'content' => json_encode([
                    'twitter' => '#',
                    'facebook' => 'https://www.facebook.com/people/Ataraxia-Balige/61572251962842/',
                    'instagram' => 'https://www.instagram.com/ataraxia.balige',
                ]),
            ],
        ]);
    }
}
