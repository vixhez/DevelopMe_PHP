<?php

require __DIR__ . "/vendor/autoload.php";

// foreach method

function squares ($numbers) {
    $squared = [];

    foreach ($numbers as $number) {
        $squared[] = $number * $number;    
    }

    return $squared;
};

// collect method

function squares ($numbers) {
    $numbers = collect([2, 3, 4]);
    $squared = $numbers->map(fn($n) => $n * $n);
    return ($squared->all());
};

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);