<?php

namespace App\Http\Controllers;

use App\Cart\ShoppingCart;
use App\Category;
use App\Product;

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
        $catName = Category::where('id', $id)->pluck('name');
        $products = Product::where('category_id', $id)->get();

        return view('product', ['products' => $products, 'categoryName' => $catName]);
    }

    public function add(Request $request, $id)
    {
        $cart = new ShoppingCart();
        $cart->add($request, Product::find($id), $request->get("quantityInput"));

        return back()->with('success','Successfully added item to cart');
    }
}
