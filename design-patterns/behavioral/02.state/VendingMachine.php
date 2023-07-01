<?php

namespace VendingMachine;

class VendingMachine
{
    private $state;
    private $history;

    public function __construct()
    {
        $this->state = new NoCoinState();
        $this->history = [];
    }

    public function setState(VendingMachineState $state)
    {
        $this->state = $state;
    }

    public function insertCoin()
    {
        $this->state->insertCoin();
        $this->history[] = 'insertCoin';
    }

    public function selectProduct()
    {
        $this->state->selectProduct();
        $this->history[] = 'selectProduct';
    }

    public function dispenseProduct()
    {
        $this->state->dispenseProduct();
        $this->history[] = 'dispenseProduct';
    }

    public function undo()
    {
        if (!empty($this->history)) {
            array_pop($this->history);

            // Set the state based on the last action
            switch (end($this->history)) {
                case 'insertCoin':
                    $this->state = new NoCoinState();
                    break;
                case 'selectProduct':
                    $this->state = new HasCoinState();
                    break;
                default:
                    $this->state = new NoCoinState();
            }
        }
    }
}
