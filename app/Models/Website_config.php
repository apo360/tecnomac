<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_config extends Model
{
    use HasFactory;

    protected $table = "website_config";

    protected $fillable = [
        'contact',
        'address',
        'facebook',
        'linkdin',
        'twitter',
        'youtube',
        'other',
        'lat',
        'longi'
    ];
}
