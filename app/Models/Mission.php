<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    // Define the table name (optional if your table name follows Laravel conventions)
    protected $table = 'mission_details';

    // Define which columns can be mass-assigned
    protected $fillable = [
        'heroTitle',
        'heroImg',
        'heroParagraph',
        'cardOneTitle',
        'cardOnedescription',
        'cardTwoTitle',
        'cardTwodescription',
        'cardThreeTitle',
        'cardThreedescription',
        'status',
    ];

    // Define the timestamps property (Laravel uses created_at and updated_at by default)
    public $timestamps = true;
}
