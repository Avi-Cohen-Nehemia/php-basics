<?php

declare(strict_types=1);

// Create a function, wow, that takes a number, n, as an argument.
// The function should return the word "Wo...ow", where there are n "o"s.
// Note: only use things that you've been taught to solve this

function wow(int $n) : string {

    $os = '';

    for ($i = 0; $i < $n ; $i += 1) { 
        $os .= 'o';
    }

    return "W{$os}w";
}

var_dump(wow(12)); // "Woooooooooooow"
var_dump(wow(4)); // "Woooow"
