<?php

declare(strict_types=1);

// Create a function, sumBoth, that takes two arrays of numbers as arguments.
// Return the sum of all the numbers from both arrays.
// Hint: to avoid repeating code, you might want to write a sum function that
// adds up the values in a single array and call that inside sumBoth

function sum(array $nums) : float {

    $sum = 0;

    foreach ($nums as $key => $value) {
        $sum += $value;
    }

    return $sum;
}

function sumBoth(array $nums1, array $nums2) : float {
    return sum($nums1) + sum($nums2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);
