<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProblemsLandOne extends Model
{
    use HasFactory;
    protected $table = 'problems_land_ones';
    protected $fillable = [
        'title'
    ];
}
