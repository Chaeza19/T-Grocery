<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, "category_id");
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
