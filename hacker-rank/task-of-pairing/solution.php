<?php
function taskOfPairing($freq) {
    $count = 0;
    $marker = false;

    foreach ($freq as $f) {
        if ($f != 0) {
            $count += floor($f / 2);

            if (($f % 2 != 0) && $marker) {
                $count += 1;
                $marker = false;
            } elseif($f % 2 != 0) {
                $marker = true;
            }
        } else {
            $marker = false;
        }
    }
    return $count;
}