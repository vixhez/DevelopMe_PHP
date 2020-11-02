<?php

require __DIR__ . "/vendor/autoload.php";

function squares ($numbers) {
    $squared = [];

    foreach ($numbers as $number) {
        $squared[] = $number * $number;    
    }

    return $squared;
};

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);