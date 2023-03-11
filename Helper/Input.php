<?php

// function untuk membuat form input
function input(string $info): string{

    // untuk label form
    echo "$info : " . PHP_EOL;

    // kolom input
    $input = fgets(STDIN);
    return trim($input);
}