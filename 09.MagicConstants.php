<?php

namespace MagicConstants;

class MagicConstants
{
    public function printInfo()
    {
        echo "Line number: " . __LINE__ . "\n";
        echo "Current file: " . __FILE__ . "\n";
        echo "Current directory: " . __DIR__ . "\n";
        echo "Current function: " . __FUNCTION__ . "\n";
        echo "Current class: " . __CLASS__ . "\n";
        echo "Current trait: " . __TRAIT__ . "\n";
        echo "Current method: " . __METHOD__ . "\n";
        echo "Current namespace: " . __NAMESPACE__ . "\n";
        // echo "Fully qualified class name: " . CLASSNAME::CLASS . "\n";
    }
}

$obj = new MagicConstants();
$obj->printInfo();

/**
 * Magic constants are predefined constants in PHP which get changed on the basis of their usage.
 * They start with two underscores (__) and end with two underscores.
 * They are used to get information about the environment and other variables.
 */
