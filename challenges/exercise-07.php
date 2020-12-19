<?php

// Write some code that outputs a cumulative total for each integer between 1 and 50.

$acc = 0;

for ($i = 1; $i <= 50 ; $i += 1) {
    $acc += $i;
    var_dump($acc);
}
