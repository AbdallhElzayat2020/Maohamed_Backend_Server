<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLandOne extends Model
{
    use HasFactory;
    protected $table = 'info_land_ones';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'video_url',
        'price'
    ];
}
