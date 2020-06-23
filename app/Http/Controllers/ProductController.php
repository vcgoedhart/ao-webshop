<?php

namespace App\Http\Controllers;

use App\Cart\ShoppingCart;
use App\Product;

use DB;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $catName = DB::table('categories')->get()->where('id', $id)->pluck('name');
        $products = DB::table('products')->get()->where('category_id', $id);

        return view('product', ['products' => $products, 'categoryName' => $catName]);
    }

    public function add(Request $request, $id)
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add($request, Product::find($id), $request->get("quantityInput"));

        return back()->with('success','Successfully added item to cart');
    }
}
