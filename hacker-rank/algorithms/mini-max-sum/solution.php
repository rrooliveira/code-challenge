<?php

function miniMaxSum($arr) {
    //Order array ASC
    sort($arr);
    $asc = $arr;

    //Order array DESC
    rsort($arr);
    $desc = $arr;

    //Remove last element of array
    array_pop($asc);
    array_pop($desc);

    //Sum array values
    $min = array_sum($asc);
    $max = array_sum($desc);

    echo $min, " ", $max;
}

$array = [1, 2, 3, 4, 5];
miniMaxSum($array);