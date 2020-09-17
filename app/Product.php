<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function category() {
         return $this->belongsTo('App\Category');
    }

    public function orders() {
         return $this->belongsToMany("App\Order", 'products_orders');
    }
}
