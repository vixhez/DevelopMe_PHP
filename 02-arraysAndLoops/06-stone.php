<?php

require __DIR__ . "/vendor/autoload.php";

function stone ($kilograms) {
    return ($kilograms * 0.157473);
}

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);