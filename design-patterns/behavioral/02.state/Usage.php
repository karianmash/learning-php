<?php

require_once 'VendingMachineState.php';
require_once 'NoCoinState.php';
require_once 'HasCoinState.php';
require_once 'VendingMachine.php';

use VendingMachine\VendingMachine;
use VendingMachine\HasCoinState;

$vendingMachine = new VendingMachine();

$vendingMachine->dispenseProduct(); // Output: Please insert a coin and select a product.
$vendingMachine->selectProduct(); // Output: Please insert a coin first.
$vendingMachine->insertCoin(); // Output: Coin inserted.

$vendingMachine->setState(new HasCoinState());
echo PHP_EOL;
echo "State changed to HasCoinState." . PHP_EOL;
echo PHP_EOL;

$vendingMachine->insertCoin(); // Output: Coin already inserted.
$vendingMachine->selectProduct(); // Output: Product selected.
$vendingMachine->undo(); // Reverts back to the state after inserting the coin.
$vendingMachine->dispenseProduct(); // Output: Product dispensed.

$vendingMachine->undo(); // Undo the last action.
echo PHP_EOL;
echo "State changed back to NoCoinState." . PHP_EOL;
echo PHP_EOL;

$vendingMachine->insertCoin(); // Output: Coin inserted.
$vendingMachine->selectProduct(); // Output: Please insert a coin first.
$vendingMachine->dispenseProduct(); // Output: Please insert a coin and select a product.
