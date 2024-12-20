<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontAbout extends Model
{
    use HasFactory;

    protected $table = 'frontAbout';

    protected $fillable = [
        'description',
        'video',
        'status',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
