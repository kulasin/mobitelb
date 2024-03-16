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
    // Assuming $this->attributes['images'] contains the string of image names separated by commas
    $imagesString = $this->attributes['images'];

    // Split the string into an array of image names
    $images = explode(',', $imagesString);

    // Check if there is at least one image name in the array
    if (!empty($images) && $images[0] !== "") {
        // Return the first image, prefixed with the path to the image directory
        return asset('/resources/img/uploads/' . $images[0]);
    } else {
        // If there are no valid image names, return the placeholder image
        return asset('/resources/img/uploads/placeholder.png');
    }
}



    // Add any additional relationships here if needed
}