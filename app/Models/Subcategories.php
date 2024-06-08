<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;


class Subcategories extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'subcategory_id';
    protected $fillable = [
        'subcategory_id',
        'subcategory_name',
        'category_id',
        // Add other fillable columns as needed
    ];

    // If your table includes timestamps and soft deletes, add the following properties:
    // public $timestamps = true;
    // protected $dates = ['deleted_at'];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
    // Define any relationships or custom methods relevant to subcategories here.
}

