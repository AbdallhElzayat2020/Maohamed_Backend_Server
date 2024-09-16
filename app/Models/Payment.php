<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'gateway', 'reference_id', 'amount', 'status', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
