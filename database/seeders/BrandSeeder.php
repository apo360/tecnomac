<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'logigate', 'image' => 'logo_logigate.png', 'link' => 'logigate.ao'],
            ['name' => 'Cartepillar', 'image' => 'img/brands/mClbpWZ4ZK7r2ACjnazulWjwb10jXg9KpJ1aBwNQ.jpg', 'link' => 'https://caterpillar.com', 'created_at' => '2024-05-29 03:29:46', 'updated_at' => '2024-05-29 03:29:46'],
            ['name' => 'John Deere', 'image' => 'img/brands/sykDLH0W9LPGI7xmw4tNyO36zgwc7vE2uCYUrvxS.png', 'created_at' => '2024-05-29 03:30:57', 'updated_at' => '2024-05-29 03:30:57'],
            ['name' => 'Komatsu', 'image' => 'img/brands/UbziUMUKOfywzRtFn0OTM5QCALNvuTNztSe0oOp0.png', 'created_at' => '2024-05-29 03:31:43', 'updated_at' => '2024-05-29 03:31:43'],
        ]);
    }
}
