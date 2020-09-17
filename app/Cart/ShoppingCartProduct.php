<?php

namespace App\Cart;

use App\Cart\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartProduct
{ 
    private $information = null;
    private $quantity = 0;
    private $price = 0;
   
    /**
     * Loads in neccessary information that the product needs
     *
     * @param mixed $productInfo
     */
    public function __construct($productInfo)
    {
        $this->information = $productInfo;
        $this->price = $productInfo->price;
    }

    /**
     * Set a quantity for the product. Also updates price according to the quantity.
     *
     * @param int $value
     */
    public function setQuantity($value) 
    {
        if ($this->quantity == 0) {
            $this->price = $value * $this->price;
        } else {
            $this->price = $value * ($this->price / $this->quantity);
        }

        $this->quantity = $value;
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
