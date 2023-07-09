<?php

namespace DesignPatterns\Structural\Decorator;

require_once 'Interfaces/Product.php';

use DesignPatterns\Structural\Decorator\Interfaces\Product;

// Concrete component - BasicProduct
class BasicProduct implements Product
{
    private $price;
    private $description;

    public function __construct($price, $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
