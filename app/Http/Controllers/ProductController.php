<?php

namespace App\Http\Controllers;

use App\Cart\ShoppingCart;
use App\Product;
use App\Category;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $category = Category::find($id);

        return view('product', ['category' => $category]);
    }

    public function add(Request $request, $id)
    {
        $cart = new ShoppingCart();
        $cart->add($request, Product::find($id), $request->get("quantityInput"));

        return back()->with('success','Successfully added item to cart');
    }
}
