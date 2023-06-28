<?php

namespace Vehicles;

class Vehicle
{
    private $make;
    private $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMake()
    {
        return "The make of this vehicle is: {$this->make}. \n";
    }

    public function getModel()
    {
        return "The model of this vehicle is: {$this->model}. \n";
    }
}
