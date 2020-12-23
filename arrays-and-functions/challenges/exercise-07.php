<?php

declare(strict_types=1);

// Create a function, average5, that takes five numbers as arguments.
// The function should return the average of the numbers.

function average5(float $num1, float $num2, float $num3, float $num4, float $num5) : float {
    return ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
}

var_dump(average5(1, 2, 3, 4, 5)); // 3
