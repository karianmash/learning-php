<?php

use Cars\Car;
use Trucks\Truck;

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car1 = new Car('Toyota', 'Camry', 4);
$truck1 = new Truck('Ford', 'F-150', 2000);

echo "Car 1 Object: \n";
echo "-------------------------------------------- \n";
echo $car1->getMake(); // Output: Toyota
echo $car1->getModel(); // Output: Camry
echo $car1->getNumDoors(); // Output: 4

echo "\n";

echo "Truck 1 Object: \n";
echo "-------------------------------------------- \n";
echo $truck1->getMake(); // Output: Ford
echo $truck1->getModel(); // Output: F-150
echo $truck1->getPayloadCapacity(); // Output: 2000
