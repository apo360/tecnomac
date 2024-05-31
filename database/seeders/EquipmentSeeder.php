<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipments')->insert([
            [
                'name' => 'Excavator XYZ',
                'brand' => 'ABC Corp',
                'model' => 'Model 123',
                'years' => 2020,
                'price' => 50000.00,
                'weights' => '5710kg',
                'rated_power' => '36.9kW / 2200rpm',
                'standard_bucket_capacity' => '0.2m3',
                'standard_bucket_width' => '775mm',
                'operation_hydraulic_pressure' => '24.5Mpa',
                'maximum_digging_force' => '37.4kN',
                'gradeadility' => '30°',
                'pressure_to_the_ground' => '31.4kPa',
                'walking_speed' => '2.8/4.7 km/h',
                'maximum_hauling_force' => '44kN',
                'swing_speed_of_platform' => '10.4 rpm',
                'descriptions' => 'This is a description of the equipment.'
            ],
            [
                'name' => 'Excavator XYZ',
                'brand' => 'ABC Corp',
                'model' => 'Model 123',
                'years' => 2020,
                'price' => 50000.00,
                'weights' => '5710kg',
                'rated_power' => '36.9kW / 2200rpm',
                'standard_bucket_capacity' => '0.2m3',
                'standard_bucket_width' => '775mm',
                'operation_hydraulic_pressure' => '24.5Mpa',
                'maximum_digging_force' => '37.4kN',
                'gradeadility' => '30°',
                'pressure_to_the_ground' => '31.4kPa',
                'walking_speed' => '2.8/4.7 km/h',
                'maximum_hauling_force' => '44kN',
                'swing_speed_of_platform' => '10.4 rpm',
                'descriptions' => 'This is a description of the equipment.'
            ],
            [
                'name' => 'Bulldozer ABC',
                'brand' => 'XYZ Inc',
                'model' => 'Model XYZ123',
                'years' => 2019,
                'price' => 75000.00,
                'weights' => '8000kg',
                'rated_power' => '45kW / 2500rpm',
                'standard_bucket_capacity' => '0.5m3',
                'standard_bucket_width' => '900mm',
                'operation_hydraulic_pressure' => '28Mpa',
                'maximum_digging_force' => '42.6kN',
                'gradeadility' => '25°',
                'pressure_to_the_ground' => '34.2kPa',
                'walking_speed' => '3.5/5.5 km/h',
                'maximum_hauling_force' => '50kN',
                'swing_speed_of_platform' => '12 rpm',
                'descriptions' => 'This is another description.'
            ],
        ]);
    }
}
