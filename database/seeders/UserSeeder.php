<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate([
            'email' => 'admin@intivestudio.com',
        ], [
            'name' => 'Admin',
            'email' => 'admin@intivestudio.com',
            'password' => bcrypt('intivestudio')
        ]);
    }
}