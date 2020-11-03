<?php

require __DIR__ . "/vendor/autoload.php";

// foreach method

// function timesBy ($numbers, $multiplier) {
//     $multiplied = [];
//     foreach ($numbers as $number) {
//         $multiplied[] = ($number * $multiplier);
//     }
//     return $multiplied;
// };

// collection method

function timesBy ($number, $multiplier) {
    return collect($number)->map(fn($num)=>$num * $multiplier);
}

dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);