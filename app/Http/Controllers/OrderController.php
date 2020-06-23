<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->where("user_id", Auth()->user()->id)->get();

        return view("order", ["orders" => $orders]);
    }
}
