<?php

namespace Cars;

use Vehicles\Vehicle;

class Car extends Vehicle
{
    private $num_doors;

    public function __construct($make, $model, $num_doors)
    {
        parent::__construct($make, $model);
        $this->num_doors = $num_doors;
    }

    public function getNumDoors()
    {
        return "This car has {$this->num_doors} doors. \n";
    }
}
