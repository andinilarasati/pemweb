<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Buat role dulu (wajib sebelum assignRole)
        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'admin_beasiswa']);
        Role::firstOrCreate(['name' => 'mahasiswa']);

        // ✅ Buat admin super
        $admin = User::firstOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('admin123'),
            ]
        );
        $admin->assignRole('super_admin');

        // ✅ Jalankan seeder lainnya (opsional)
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}
