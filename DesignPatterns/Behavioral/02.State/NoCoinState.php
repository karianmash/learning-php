<?php

namespace VendingMachine;

class NoCoinState implements VendingMachineState
{
    public function insertCoin()
    {
        echo "Coin inserted." . PHP_EOL;
    }

    public function selectProduct()
    {
        echo "Please insert a coin first." . PHP_EOL;
    }

    public function dispenseProduct()
    {
        echo "Please insert a coin and select a product." . PHP_EOL;
    }
}
