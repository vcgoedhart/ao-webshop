<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart\Product;
use App\Cart\ShoppingCart;
use Session;
use DB;

class ShoppingCartController extends Controller
{
    public function index() 
    {
        $shoppingCart = new ShoppingCart();

        return view("shoppingCart", ["shoppingCart" => $shoppingCart->getSessionCart()]);
    }

    public function update(Request $request, $id) 
    {
        Session::get('shoppingCart')->editQuantity($id, $request->get("quantityInput"));

        return back();
    }

    public function remove($id)
    {
        Session::get('shoppingCart')->removeProduct($id);

        return back();
    }

    public function order()
    {
        $shoppingCart = Session::get('shoppingCart');
        
        $content = ["cart" => serialize($shoppingCart),
                    "user_id" => Auth()->user()->id];
 
        DB::table("orders")->insert($content);

        Session::forget('shoppingCart');

        return back();
    }
}