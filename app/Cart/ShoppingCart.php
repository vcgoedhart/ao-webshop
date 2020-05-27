<?php

namespace App\Cart;

use App\Product;

use Illuminate\Http\Request;
use Session;

class ShoppingCart
{
    private $items = [];
   
    /**
     * Loads old shopping cart to prevent erasing from older array.
     *
     * @param ShoppingCart $oldShoppingCart
     */
    public function __construct(ShoppingCart $oldShoppingCart)
    {
        if ($oldShoppingCart) {
            $this->items = $oldShoppingCart->items;
        }
    }

    /**
     * Add an item to the ShoppingCart session
     *
     * @param Request $request
     * @param Product $product
     * @return void
     */
    public function add(Request $request, Product $product)
    {
        // Creates new item with proved information.
        $newItem = ["item" => $product,
                    "quantity" => 0,
                    "price" => 0];

        // Checks if item already exists in shopping cart.
        if ($this->items && array_key_exists($product->id, $this->items)) {
            $newItem = $this->items[$product->id];
        }

        // Update information about the cart
        $newItem["quantity"]++;
        $newItem["price"] = $newItem["quantity"] * $product->price;

        $this->items[$product->id] = $newItem;

        $request->session()->put('shoppingCart', $this);
    }

    /**
     * Get everything out of the items array
     *
     * @return void
     */
    public function getAll () {
        return $this->items;
    }

}
