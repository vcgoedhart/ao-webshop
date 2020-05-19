<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
}
