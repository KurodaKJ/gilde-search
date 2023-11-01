<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    use HasFactory;

    protected $table = 'sites'; // Set the table name if it's different from the default.

    protected $fillable = [
        'title', 'url', 'description', 'keywords',
        // Add other fields you want to be fillable here.
    ];
}
