<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run()
    {
        AboutSection::create([
            'image_url' => 'assets/img/story.jpg',
            'paragraph1' => 'Marsada Band started as a group of passionate musicians.',
            'paragraph2' => 'They began by performing traditional Batak songs.',
            'paragraph3' => 'Now, they inspire audiences across Indonesia and beyond.',
            'image_position' => 'left',
        ]);
    }
}
