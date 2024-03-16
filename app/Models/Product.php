<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'category', 'subcategory', 'brand','color','specifications', 'description', 'price', 'sale_old_price', 'sale_active',
        'sale_price_ends', 'images', 'featured'
    ];
    


    // Assuming the 'images' column will store an array of image URLs
 public function getImagesAttribute($value)
{
    // Check if $value is already an array
    if (is_array($value)) {
        // Convert array to string
        $value = implode(', ', $value);
    }

    // Ensure $value is a non-empty string before exploding
    if (is_string($value) && trim($value) !== '') {
        // Explode the string into an array
        return explode(', ', $value);
    }

    // Return an empty array if $value is not a valid string
    return [];
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