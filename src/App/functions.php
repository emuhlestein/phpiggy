<?php

declare(strict_types=1);

// dump and die
function dd(mixed $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die(); // stop rendering the page
}