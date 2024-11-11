<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'price';

    protected $fillable = [
        'cardOneTitle',
        'cardOnePrice',
        'cardOneFeatures',
        'cardTwoTitle',
        'cardTwoPrice',
        'cardTwoFeatures',
        'cardThreeTitle',
        'cardThreePrice',
        'cardThreeFeatures',
    ];

    protected $casts = [
        'cardOneFeatures' => 'array',
        'cardTwoFeatures' => 'array',
        'cardThreeFeatures' => 'array',
    ];
}
