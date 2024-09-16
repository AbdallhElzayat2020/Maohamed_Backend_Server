<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'file_path',
    ];

    public function productUsers()
    {
        return $this->hasMany(ProductsUser::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
