<?php

declare(strict_types=1);

// Create a function, double, that takes an array of numbers as an argument.
// Return a new array containing each number doubled.

function double(array $nums) : array {

    $doubledNums = [];

    foreach ($nums as $key => $value) {
        $doubledNums[] = $value * 2;
    };

    return $doubledNums;
}

var_dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);
