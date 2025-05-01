<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Footer::count()==0) {
            Footer::create([
                'section' => 'service',
                'label' => 'online service',
                'url' => 'http://localhost',
                'order'=> 1,
                
            ]);
        }
    }
}
