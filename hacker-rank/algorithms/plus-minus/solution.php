<?php

function plusMinus($arr) {
    $count = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $result = [];

    foreach ($arr as $value) {
        if ($value > 0) {
            $positive++;
        } else if ($value < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    $result[] = number_format(floatval($positive / $count), 6, '.', '');
    $result[] = number_format(floatval($negative / $count), 6, '.', '');
    $result[] = number_format(floatval($zero / $count), 6, '.', '');

    echo implode("\n\r", $result);
}
$array = [-4, 3, -9, 0, 4, 1];

$array = [55, 48, 48, 45, 91, 97, 45, 1, 39, 54, 36, 6,
    19, 35, 66, 36, 72, 93, 38, 21, 65, 70, 36, 63,
    39, 76, 82, 26, 67, 29, 24, 82, 62, 53, 1, 50,
    47, 65, 67, 19, 66, 90, 77];

plusMinus($array);