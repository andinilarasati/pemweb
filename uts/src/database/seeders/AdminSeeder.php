<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@beasiswacemerlang.test'],
            [
                'name' => 'Admin Beasiswa',
                'password' => bcrypt('password123'),
                'role' => 'admin',
            ]
        );

    }
}
