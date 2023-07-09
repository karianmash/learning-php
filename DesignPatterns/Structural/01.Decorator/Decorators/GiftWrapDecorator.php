<?php

namespace DesignPatterns\Structural\Decorator\Decorators;

require_once 'ProductDecorator.php';

use DesignPatterns\Structural\Decorator\Interfaces\Product;

// Concrete decorator - GiftWrapDecorator
class GiftWrapDecorator extends ProductDecorator
{
    private $giftWrapPrice;

    public function __construct(Product $product, $giftWrapPrice)
    {
        parent::__construct($product);
        $this->giftWrapPrice = $giftWrapPrice;
    }

    public function getPrice(): float
    {
        return $this->product->getPrice() + $this->giftWrapPrice; // Add some dollars for gift wrapping
    }

    public function getDescription(): string
    {
        return $this->product->getDescription() . ' + Gift Wrap'; // Append gift wrap to description
    }
}