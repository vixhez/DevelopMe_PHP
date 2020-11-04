<?php

require __DIR__ . "/vendor/autoload.php";

// Tarik's solution

function middle($letter, $times) {
    $middle = "";
    for ($i = 0; $i < $times; $i += 1) {
        $middle .= $letter;
    };
    return $middle;
}

function wow ($n) {
    return "W" . middle("o", n) . "w";
}

dump(wow(12)); // "Woooooooooooow"
dump(wow(4)); // "Woooow"