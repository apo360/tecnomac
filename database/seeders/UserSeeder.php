<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Apolinário',
                'email' => 'admin@admin.com',
                'password' => Hash::make('senha123'), // Substitua 'senha123' pela senha desejada
                'created_at' => '2024-05-09 11:35:23'
            ],
            [
                'name' => 'Kapa Empresa Administrator',
                'email' => 'dti@kapa28.com',
                'password' => Hash::make('senha456'), // Substitua 'senha456' pela senha desejada
                'created_at' => '2024-05-28 19:35:34',
                'updated_at' => '2024-05-28 19:35:34'
            ],
        ]);
    }
}
