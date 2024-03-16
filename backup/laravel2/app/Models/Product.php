<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category', 'subcategory', 'brand','specifications', 'description', 'price', 'sale_old_price', 'sale_active',
        'sale_price_end', 'images', 'visible', 'featured'
    ];

    // Assuming the 'images' column will store an array of image URLs
 
    public function getImagesAttribute($value)
{
    return explode(', ', $value);
}

public function getFirstImageAttribute()
{
    $images = $this->getImagesAttribute($this->attributes['images']);

    if (empty($images) || (count($images) === 1 && $images[0] === "")) {
        // If 'images' array is empty or contains only an empty string, return the placeholder image
        return asset('../resources/img/uploads/placeholder.png');
    }

    return asset('../resources/img/uploads/' . $images[0]);
}


    // Add any additional relationships here if needed
}