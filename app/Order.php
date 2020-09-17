<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['user_id', 'product_id', 'total_price', 'total_quantity'];
    
    public $timestamps = false;

    public function products() {
        return $this->belongsToMany(Product::class, 'products_orders')
            ->withPivot("quantity")
            ->withPivot("price");
    }
}
