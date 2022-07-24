<?php

function staircase($n) {
    for ($i = 1; $i <= $n; $i++) {
        $string = str_repeat("#", $i);
        echo str_pad($string, $n, " ", STR_PAD_LEFT) . "\n";
    }
}

staircase(6);