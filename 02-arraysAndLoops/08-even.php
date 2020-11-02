<?php

require __DIR__ . "/vendor/autoload.php";

function even ($number) {
    return ($number % 2 === 0) ? true : false;
}

dump(even(1)); // false
dump(even(2)); // true