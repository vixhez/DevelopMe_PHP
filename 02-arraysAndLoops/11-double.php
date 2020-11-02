<?php

require __DIR__ . "/vendor/autoload.php";

// foreach method

// function double ($numbers) {
//     $doubled = [];
//     foreach($numbers as $number) {
//         $doubled[] = $number + $number;
//     }
//     return $doubled;
// }

// collection method

function double ($numbers) {
    return collect($numbers)->map(fn($n)=>$n+$n); 
}



dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);