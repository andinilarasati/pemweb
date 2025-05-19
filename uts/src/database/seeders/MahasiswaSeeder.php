<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('mahasiswa123'),
                'role' => 'mahasiswa',
                'nim' => $faker->numerify('##########'),
                'fakultas' => $faker->randomElement(['Ilmu Komputer', 'Ekonomi', 'Hukum', 'Teknik']),
                'ipk' => $faker->randomFloat(2, 2.5, 4.0),
            ]);
        }
    }
}
