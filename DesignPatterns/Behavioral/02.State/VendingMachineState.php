<?php

namespace VendingMachine;

interface VendingMachineState
{
    public function insertCoin();
    public function selectProduct();
    public function dispenseProduct();
}
