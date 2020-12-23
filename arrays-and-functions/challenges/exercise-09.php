<?php

declare(strict_types=1);

// Create a function, squares, that takes an array of numbers as an argument.
// Return a new array containing the square of each number.

function squares(array $nums) : array {

    $squaredNums = [];

    foreach ($nums as $key => $value) {
        $squaredNums[] = $value * $value;
    };

    return $squaredNums;
}

var_dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);