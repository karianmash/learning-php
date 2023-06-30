<?php

namespace DesignPatterns\Structural\Decorator;

require_once 'Interfaces/Product.php';

use DesignPatterns\Structural\Decorator\Interfaces\Product;

// Decorator abstract class - ProductDecorator
abstract class ProductDecorator implements Product
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getPrice(): float
    {
        return $this->product->getPrice();
    }

    public function getDescription(): string
    {
        return $this->product->getDescription();
    }
}