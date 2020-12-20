<?php

declare(strict_types=1);

// Create a function, joinWords, that takes two strings as arguments.
// The function should return the two strings joined together with a space in between.

function joinWords(string $firstWord, string $secondWord) : string {
    return "${firstWord} ${secondWord}";
};

var_dump(joinWords("fish", "sticks")); // "fish sticks"
var_dump(joinWords("hello", "world")); // "hello world"
