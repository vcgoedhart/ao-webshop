<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderViewController extends Controller
{
    public function index($id)
    {
        $products = Order::find($id)->products;
        
        return view('orderView', ["products" => $products]);
    }
}
