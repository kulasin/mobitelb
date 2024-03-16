<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'city',
        'postal_code',
        'phone',
        'subtotal',
        'shipping_cost',
        'total',
        'newsletter',
        'products',
    ];

    protected $casts = [
        'products' => 'array',
        'newsletter' => 'boolean',
    ];

    // Define the relationship between Order and User models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
