<?php

namespace App\Cart;

use App\Cart\ShoppingCartProduct;

use Illuminate\Http\Request;
use Session;

class ShoppingCart
{
    private $cart = [];

    /**
     * Load in old shopping cart to prevent data from erasing
     *
     * @param mixed $oldShoppingCart
     */
    public function __construct()
    {
        if ($this->getSessionCart()) {
            $this->cart = $this->getSessionCart()->cart;
        }
    }

    /**
     * Add product to the cart array
     *
     * @param Request $request
     * @param \App\Product $product
     */
    public function add(Request $request, \App\Product $product, $quantity)
    {
        $newProduct = new ShoppingCartProduct($product);

        if (array_key_exists($product->id, $this->cart)) {
            $newProduct = $this->cart[$product->id];
        }

        $newProduct->setQuantity($newProduct->quantity + $quantity);

        $this->cart[$product->id] = $newProduct;

        $request->session()->put('shoppingCart', $this);
    }

    /**
     * Edit quantity of product (0 = delete)
     *
     * @param int $id
     * @param int $quantity
     */
    public function editQuantity(Request $request, $id, $quantity)
    {
        if ($quantity == 0) {
            $this->removeProduct($request, $id);
            return;
        }

        $product = $this->cart[$id];
        $product->setQuantity($quantity);

        $request->session()->put('shoppingCart', $this);
    }

    /**
     * Remove product out of the cart array (none = forget session)
     *
     * @param int $id
     */
    public function removeProduct(Request $request, $id)
    {
        unset($this->cart[$id]);

        if (empty($this->cart)) {
            Session::forget("shoppingCart");
        }

        $request->session()->put('shoppingCart', $this);
    }

    /**
     * Get total quantity of every product
     */
    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->cart as $product) {
            $totalQuantity += $product->quantity;
        }
        return $totalQuantity;
    }

    /**
     * Get total price of every product
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->cart as $product) {
            $totalPrice += $product->price;
        }
        return $totalPrice;
    }

    /**
     * Get a property value.
     *
     * @param string $propName
     */
    public function __get($propName)
    {
        if (property_exists($this, $propName)) {
            return $this->$propName;
        }
    }

    /**
     * Set a property value.
     *
     * @param string $propName
     * @param mixed $value
     */
    public function __set($propName, $value)
    {
        if (property_exists($this, $propName)) {
            $this->$propName = $value;
        }
    }

    public function getSessionCart()
    {
        return Session::has('shoppingCart') ? Session::get('shoppingCart') : null;
    }
}
