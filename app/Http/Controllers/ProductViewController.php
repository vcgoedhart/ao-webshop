<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductViewController extends Controller
{  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $product = DB::table('products')->get()->where('id', $id)[$id - 1];

        return view('productView', ["product" => $product]);
    }
}