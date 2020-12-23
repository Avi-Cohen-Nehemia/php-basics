<?php

declare(strict_types=1);

// Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.
// Hint: stick to things you've been taught and try not to Google/Stack Overflow it

function both(array $list1, array $list2) {

    $inBoth = [];

    foreach ($list1 as $list1Val) {

        foreach ($list2 as $list2Val) {
    
            if ($list1Val === $list2Val) {
                $inBoth[] = $list1Val;
            }

        }

    }

    return $inBoth;
}

var_dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);
