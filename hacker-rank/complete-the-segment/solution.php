<?php

function segment($x, $space)
{
    $n = count($space);

    if ($n === 1) {
        return $space[0];
    }

    $arrays = [];
    for ($i = 0; $i < $x; $i++) {
        $arrays[] = array_slice($space, $i, $x);
    }

    $min = [];
    foreach ($arrays as $array) {
        $min[] = min($array);
    }

    return max($min);
}