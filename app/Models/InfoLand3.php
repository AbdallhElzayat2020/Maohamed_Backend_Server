<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoLand3 extends Model
{
    use HasFactory;
    protected $table = 'info_land3s';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'video_url',
    ];
}
