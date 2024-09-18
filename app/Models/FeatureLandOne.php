<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureLandOne extends Model
{
    use HasFactory;
    protected $table = 'feature_land_ones';
    protected $fillable = [
        'title'
    ];
}
