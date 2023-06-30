<?php

namespace DesignPatterns\Structural\Decorator\Interfaces;

// Component interface - Product
interface Product
{
    public function getPrice(): float;
    public function getDescription(): string;
}
