<?php

require __DIR__ . "/vendor/autoload.php";

function average5 ($number1, $number2, $number3, $number4, $number5) {
    return (($number1 + $number2 + $number3 + $number4 + $number5) / 5);
}

dump(average5(1, 2, 3, 4, 5)); // 3