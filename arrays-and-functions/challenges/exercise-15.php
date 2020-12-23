<?php

declare(strict_types=1);

// Create a function, total, that takes an array of shopping item associative arrays and adds their price together.

function total(array $items) : float {
    
    $total = 0;

    foreach ($items as $key => $item) {
        $total += $item['price'];
    }

    return $total;
}

$shoppingList = [[
    "name" => "coffee",
    "price" => 3.50,
], [
    "name" => "tea",
    "price" => 2.50,
], [
    "name" => "toblerone",
    "price" => 3.20,
], [
    "name" => "newspaper",
    "price" => 0.10,
]];

var_dump(
    total($shoppingList), // 9.3
);
