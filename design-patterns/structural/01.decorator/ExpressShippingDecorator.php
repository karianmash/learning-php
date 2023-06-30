<?php

namespace DesignPatterns\Structural\Decorator;

require_once 'ProductDecorator.php';

use DesignPatterns\Structural\Decorator\Interfaces\Product;

// Concrete decorator - ExpressShippingDecorator
class ExpressShippingDecorator extends ProductDecorator
{
    private $expressShippingPrice;

    public function __construct(Product $product, $expressShippingPrice)
    {
        parent::__construct($product);
        $this->expressShippingPrice = $expressShippingPrice;
    }

    public function getPrice(): float
    {
        return $this->product->getPrice() + $this->expressShippingPrice; // Add some dollars for express shipping
    }

    public function getDescription(): string
    {
        return $this->product->getDescription() . ' + Express Shipping'; // Append express shipping to description
    }
}