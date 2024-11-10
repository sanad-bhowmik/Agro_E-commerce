<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'price',
        'details',
        'rating',
        'brand',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];
}
