<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = "equipments";

    protected $fillable = [
        'name', 'brand', 'model', 'years', 'price', 'weights', 'rated_power', 
        'standard_bucket_capacity', 'standard_bucket_width', 'operation_hydraulic_pressure',
        'maximum_digging_force', 'gradeadility', 'pressure_to_the_ground', 'walking_speed',
        'maximum_hauling_force', 'swing_speed_of_platform', 'descriptions', 'images', 'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
