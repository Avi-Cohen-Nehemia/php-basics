<?php

declare(strict_types=1);

// Update hello so that it returns the string "hello name".

function hello(string $name) : string {
    return "hello {$name}";
};

var_dump(hello("alice")); // "hello alice"
var_dump(hello("bob")); // "hello bob"
