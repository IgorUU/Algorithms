<?php

/**
 * Bubble sorting.
 *
 * @param array $arr
 *   Array to sort.
 *
 * @return void
 */
function bubbleSort(array &$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
//        If we put $n - 1, instead of $n - $i - 1, it would iterate over the whole array, every time.
//        But this way, every next iteration is shorter by one element.
//        Because in every iteration the highest element is pushed to the end of the array.
//        So there is no need to check it again.
        for ($j = 0; $j < $n - $i - 1; $j++) {
//            var_dump("{$j}. time: " . $arr[$j]);
            if ($arr[$j] > $arr[$j + 1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
}

$arr = [64, 34, 25, 12, 22, 11, 90];
bubbleSort($arr);
print_r($arr);