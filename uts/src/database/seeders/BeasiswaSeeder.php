<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;
use Illuminate\Support\Carbon;

class BeasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Beasiswa::create([
            'nama' => 'Beasiswa Prestasi Akademik',
            'deskripsi' => 'Diberikan kepada mahasiswa dengan IPK minimal 3.5 dan aktif dalam kegiatan organisasi.',
            'periode_mulai' => Carbon::now(),
            'periode_selesai' => Carbon::now()->addMonth(),
            'kuota' => 20,
            'jenis' => 'akademik',
            'persyaratan' => 'IPK minimal 3.5, aktif organisasi',
            'is_active' => true
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa Atlet',
            'deskripsi' => 'Ditujukan bagi mahasiswa yang memiliki prestasi di bidang olahraga tingkat nasional atau daerah.',
            'periode_mulai' => Carbon::now(),
            'periode_selesai' => Carbon::now()->addWeeks(3),
            'kuota' => 10,
            'jenis' => 'non-akademik',
            'persyaratan' => 'Melampirkan sertifikat prestasi atletik',
            'is_active' => true
        ]);
    }
}
