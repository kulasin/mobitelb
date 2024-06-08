<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id',
        'category_name',
        'parent_category_id',
        // Add other fillable columns as needed
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category', 'category_name');
    }


    public function subcategories()
    {
        return $this->hasMany(Subcategories::class, 'category_id', 'category_id');
    }

    // If your table includes timestamps and soft deletes, add the following properties:
    // public $timestamps = true;
    // protected $dates = ['deleted_at'];

    // Define any relationships or custom methods relevant to categories here.
}
