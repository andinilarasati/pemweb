<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'title' => 'DUMBO',
            'detail' => 'Dumbo Gajah Sirkus yang bisa terbang dengan kupingnya. ',
            'image' => ''
        ]);
    }
}
