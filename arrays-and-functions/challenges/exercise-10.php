<?php

declare(strict_types=1);

// Create a function, average, that takes an array of numbers as an argument.
// Return the average value of all the numbers.

function average(array $nums) : float {

    $sum = 0;

    foreach($nums as $key => $value) {
        $sum += $value;
    }

    return $sum / count($nums);
}

var_dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);