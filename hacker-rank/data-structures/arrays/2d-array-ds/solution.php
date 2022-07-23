<?php
function hourglassSum($arr) {
    $higherValue = PHP_INT_MIN;

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $value1 = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2];
            $value2 = $arr[$i+1][$j+1];
            $value3 = $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];

            $total = ($value1 + $value2 + $value3);

            if ($total > $higherValue) {
                $higherValue = $total;
            }
        }
    }
    return $higherValue;
}

$array = [
    [-1, -1,  0, -9, -2, -2],
    [-2, -1, -6, -8, -2, -5],
    [-1, -1, -1, -2, -3, -4],
    [-1, -9, -2, -4, -4, -5],
    [-7, -3, -3, -2, -9, -9],
    [-1, -3, -1, -2, -4, -5],
];

hourglassSum($array);