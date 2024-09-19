<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLandTwo extends Model
{
    use HasFactory;
    protected $table = 'info_land_twos';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'video_url',
    ];
}
