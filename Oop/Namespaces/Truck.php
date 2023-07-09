<?php

namespace Trucks;

use Vehicles\Vehicle;

class Truck extends Vehicle
{
    private $payload_capacity;

    public function __construct($make, $model, $payload_capacity)
    {
        parent::__construct($make, $model);
        $this->payload_capacity = $payload_capacity;
    }

    public function getPayloadCapacity()
    {
        return "This truck can carry {$this->payload_capacity} pounds. \n";
    }
}
