<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 0; $i <= 50; $i += 1) {
    if ($i % 3 === 0) {
        var_dump($i);
    };
};