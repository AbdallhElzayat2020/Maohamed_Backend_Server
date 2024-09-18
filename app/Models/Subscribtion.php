<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribtion extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1_before',
        'title2_before',
        'title3_before',
        'title4_before',
        'title1_after',
        'title2_after',
        'title3_after',
        'title4_after',
    ];
    protected $table = 'subscribtions';
}
