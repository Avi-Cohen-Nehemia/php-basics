<?php

declare(strict_types=1);

// Create a function, largest, that takes an array of numbers. Return the largest number.

function largest(array $nums) : float {

    $largest = $nums[0];

    foreach ($nums as $key => $value) {
        $largest = $value > $largest ? $value : $largest;
    }

    return $largest;
}

var_dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);
