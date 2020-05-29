<?php

namespace App\Http\Controllers;

use App\Cart\ShoppingCart;
use App\Product;

use DB;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        $oldShoppingCart = Session::has('shoppingCart') ? Session::get('shoppingCart') : null;
        $shoppingCart = new ShoppingCart($oldShoppingCart);

        $shoppingCart->add($request, Product::find($id), $request->get("quantityInput"));

        return back()->with('success','Successfully added item to cart');
    }
}
