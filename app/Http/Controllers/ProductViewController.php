<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductViewController extends Controller
{  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $product = Product::find($id);

        return view('productView', ["product" => $product]);
    }
}