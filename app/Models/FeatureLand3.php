<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureLand3 extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];
    protected $table = 'feature_land3s';
}
