<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart\Product;
use Session;

class ShoppingCartController extends Controller
{
    public function index() 
    {
        $shoppingCart = Session::has("shoppingCart") ? Session::get('shoppingCart') : null;

        return view("shoppingCart", ["shoppingCart" => $shoppingCart]);
    }

    public function update(Request $request, $id) 
    {
        Session::get('shoppingCart')->editQuantity($id, $request->get("quantityInput"));

        return back();
    }
}
