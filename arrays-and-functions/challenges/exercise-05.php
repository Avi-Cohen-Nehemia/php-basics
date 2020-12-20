<?php

declare(strict_types=1);

// Create a function, divide, that takes two numbers as arguments.
// The function should return the first number divided by the second number.

function divide(float $x, float $y) : float {
    return $x / $y;
};

var_dump(divide(4, 2)); // 2
var_dump(divide(20, 2)); // 10
var_dump(divide(5, 2)); // 2.5
var_dump(divide(2.5, 0.5)); // 5
