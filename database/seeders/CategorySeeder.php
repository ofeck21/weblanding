<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Portfolio'
            ],
            [
                'name' => 'Blog'
            ],
            [
                'name' => 'Education'
            ],
            [
                'name' => 'Event'
            ],
            [
                'name' => 'Other'
            ],
            [
                'name' => 'Company Profile'
            ]
        ];

        foreach ($data as $value) {
            \App\Models\Category::firstOrCreate(['name' => $value['name']],$value);
        }
    }
}
