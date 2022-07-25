<?php

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    //s: integer, starting point of Sam's house location.
    //t: integer, ending location of Sam's house location.
    //a: integer, location of the Apple tree.
    //b: integer, location of the Orange tree.
    //apples: integer array, distances at which each apple falls from the tree.
    //oranges: integer array, distances at which each orange falls from the tree.
    $applesTotal = 0;
    $orangesTotal = 0;

    for ($i = 0; $i < count($apples); $i++) {
        if ($a + $apples[$i] >= $s && $a + $apples[$i] <= $t) {
            $applesTotal++;
        }
    }

    for ($j = 0; $j < count($oranges); $j++) {
        if ($b + $oranges[$j] >= $s && $b + $oranges[$j] <= $t) {
            $orangesTotal++;
        }
    }

    echo $applesTotal, "\n", $orangesTotal;
}