<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('website_config')->insert([
            [
                'contact' => '788-123-9900',
                'address' => '35 Oakridge Lane, NJ 08102',
                // Outros campos deixados em branco conforme seu exemplo
            ],
        ]);
    }
}
