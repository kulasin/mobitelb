<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable = [
        'subcategory_id',
        'subcategory_name',
        'category_id',
        // Add other fillable columns as needed
    ];

    // If your table includes timestamps and soft deletes, add the following properties:
    // public $timestamps = true;
    // protected $dates = ['deleted_at'];

    // Define any relationships or custom methods relevant to subcategories here.
}

