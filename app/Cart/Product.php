<?php

namespace App\Cart;

use App\Cart\ShoppingCart;
use Illuminate\Http\Request;

class Product
{ 
    private $information = null;
    private $quantity = 0;
    private $price = 0;
   
    public function __construct($productInfo)
    {
        $this->information = $productInfo;
        $this->price = $productInfo->price;
    }

    public function quantityIncrement() 
    {
        if ($this->quantity > 0) {
            $this->price = ($this->quantity + 1) * ($this->price / $this->quantity);
        }
        $this->quantity++;
    }

    public function setQuantity($value) 
    {
        $this->price = $value * ($this->price / $this->quantity);
        $this->quantity = $value;

        $this->totalQuantity++;
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

}
