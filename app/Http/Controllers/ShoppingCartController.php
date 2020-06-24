<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart\ShoppingCart;
use App\Order;

use Session;

class ShoppingCartController extends Controller
{
    public function index() 
    {
        $shoppingCart = new ShoppingCart();

        return view("shoppingCart", ["shoppingCart" => $shoppingCart->getSessionCart()]);
    }

    public function update(Request $request, $id) 
    {
        $cart = new ShoppingCart();
        $cart->editQuantity($id, $request->get("quantityInput"));

        return back();
    }

    public function remove($id)
    {
        $cart = new ShoppingCart();
        $cart->removeProduct($id);

        return back();
    }

    public function order()
    {
        $cart = new ShoppingCart();

        $content = ["cart" => serialize($cart->getSessionCart()),
                    "user_id" => Auth()->user()->id];
 
        // DB::table("orders")->insert($content);
        Order::create([
            'cart' => $content['cart'],
            'user_id' => $content['user_id']
        ]);

        Session::forget('shoppingCart');

        return back();
    }
}