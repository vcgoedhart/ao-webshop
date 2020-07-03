<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where("user_id", Auth()->user()->id)->get();

        return view("order", ["orders" => $orders]);
    }
}
