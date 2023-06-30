<?php

function fibonacci($n)
{
    static $cache = [];

    if (isset($cache[$n])) {
        return $cache[$n];
    }

    if ($n <= 1) {
        $result = $n;
    } else {
        $result = fibonacci($n - 1) + fibonacci($n - 2);
    }

    $cache[$n] = $result;

    return $result;
}

// Testing the memoized Fibonacci function
echo fibonacci(0) . "\n";  // Output: 0
echo fibonacci(1) . "\n";  // Output: 1
echo fibonacci(2) . "\n";  // Output: 1
echo fibonacci(5) . "\n";  // Output: 5
echo fibonacci(10) . "\n"; // Output: 55
