<?php

declare(strict_types=1);

// Create a function, stone, that takes a weight in kg and converts it to stone

function stone(float $kg) : float {
    return $kg * 0.15747;
}

var_dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);
