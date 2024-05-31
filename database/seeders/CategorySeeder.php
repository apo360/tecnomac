<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Excavators', 'description' => 'Excavators are powerful machines used for digging and earth-moving tasks.', 'icon' => 'feature-1.png'],
            ['name' => 'Aerial Machines', 'description' => 'Aerial Machines are specialized equipment used for various tasks at height.', 'icon' => 'feature-2.png'],
            ['name' => 'Forklifts', 'description' => 'Forklifts are used for lifting and transporting heavy loads in warehouses and industrial settings.', 'icon' => 'feature-3.png'],
            ['name' => 'Dumper & Loaders', 'description' => 'Dumpers and Loaders are versatile machines used for material handling and transportation.', 'icon' => 'feature-4.png'],
            ['name' => 'Compact Rollers', 'description' => 'Compact Rollers are used for compacting soil, asphalt, and other materials in construction projects.', 'icon' => 'feature-5.png'],
            ['name' => 'Mobile Cranes', 'description' => 'Mobile Cranes are used for lifting and moving heavy loads in construction and industrial settings.', 'icon' => 'feature-6.png'],
            ['name' => 'Bulldozers', 'description' => 'Bulldozers are heavy earthmoving equipment used for various construction and land-clearing tasks.', 'icon' => 'feature-7.png'],
            ['name' => 'Utility Tractors', 'description' => 'Utility Tractors are versatile machines used for various agricultural and landscaping tasks.', 'icon' => 'feature-8.png'],
            ['name' => 'Mixer Trucks', 'description' => 'Mixer Trucks are specialized vehicles used for transporting and mixing concrete at construction sites.', 'icon' => 'feature-9.png'],
        ]);
    }
}
