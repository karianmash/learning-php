<?php

namespace VendingMachine;

class HasCoinState implements VendingMachineState
{
    public function insertCoin()
    {
        echo "Coin already inserted." . PHP_EOL;
    }

    public function selectProduct()
    {
        echo "Product selected." . PHP_EOL;
    }

    public function dispenseProduct()
    {
        echo "Product dispensed." . PHP_EOL;
    }
}
