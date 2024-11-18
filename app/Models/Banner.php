<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    // Table name (optional, only if different from 'banners')
    protected $table = 'banner';

    // The attributes that are mass assignable
    protected $fillable = [
        'title',
        'firstVideo',
        'secondVideo',
        'thirdVideo',
    ];

    // Timestamps (optional, only if you want to explicitly disable timestamps)
    public $timestamps = true;

    // Cast dates as timestamps (optional, for created_at and updated_at)
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
