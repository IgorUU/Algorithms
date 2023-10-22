<?php

function binarySearch(array &$arr, int $l, int $r, string|int $t) {
    while ($l <= $r) {
        $m = (int) ($l + ($r - $l) / 2);
        var_dump($m);

        if ($arr[$m] == $t) {
            return $m + 1;
        }
        if ($arr[$m] < $t) {
            $l = $m + 1;
        }
        else {
            $r = $m - 1;
        }
    }

    return -1;
}

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22];
$position = binarySearch($arr, 0, count($arr), 14);
$message = $position == -1 ? "The value could not be found." : "The value is at position: {$position}.";
echo $message;