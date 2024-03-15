<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name'          => 'Personal Template 1',
                'category_id'   => 1,
                'demo_url'      => '#',
                'thumbnail'     => 'theme1.png',
                'is_recommended'=> true
            ],
            [
                'name'          => 'Personal Template 2',
                'category_id'   => 1,
                'demo_url'      => '#',
                'thumbnail'     => 'theme2.png',
                'is_recommended'=> true
            ],
            [
                'name'          => 'Portfolio Template 1',
                'category_id'   => 1,
                'demo_url'      => '#',
                'thumbnail'     => 'theme3.png',
                'is_recommended'=> true
            ],
            [
                'name'          => 'Portfolio Template 2',
                'category_id'   => 1,
                'demo_url'      => '#',
                'thumbnail'     => 'theme4.png',
                'is_recommended'=> true
            ],
        ];

        foreach ($templates as $template) {
            \App\Models\Template::firstOrCreate(['name' => $template['name'], 'category_id' => $template['category_id']],$template);
        }
    }
}
