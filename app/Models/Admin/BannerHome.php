<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerHome extends Model
{
    use HasFactory;

    protected $table = "banner_homes";
    protected $fillable = ['title', 'description'];
}
