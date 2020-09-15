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
        $cart->editQuantity($request, $id, $request->get("quantityInput"));

        return back();
    }

    public function remove(Request $request, $id)
    {
        $cart = new ShoppingCart();
        $cart->removeProduct($request, $id);

        return back();
    }

    public function order()
    {
        $cart = new ShoppingCart();

        Order::create([
            'cart' => serialize($cart->getSessionCart()),
            'user_id' => Auth()->user()->id
        ]);

        Session::forget('shoppingCart');

        return back()->with('success', 'Successfully ordered');
    }
}
