<?php
// Class
class Vehicle
{
    // Properties
    public $color;
    public $speed;
    public $brand;

    // Method
    public function tripTime($distance)
    {
        $time = $distance / $this->speed;
        return $time;
    }
}

// Object car
$car = new Vehicle();
$car->color = 'red';
$car->speed = 100;
$car->brand = 'Toyota';

// Print to screen
echo $car->color = "The car color is: " . $car->color . "\n";
echo $car->speed = "The car speed is: " . $car->speed . "\n";
echo $car->brand = "The car brand is: " . $car->brand . "\n";
