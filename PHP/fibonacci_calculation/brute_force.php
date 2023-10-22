<?php

/**
 * Straightforward (Brute force) approach
 */
function fibBruteForce($n)
{
    if ($n == 1) {
        return 0;
    } elseif ($n == 2) {
        return 1;
    } else {
        // Once this can be calculated (fibBruteForce(2) and fibBruteForce(1), which is 1 + 0),
        // we actually have the result of fitBruteForce(3).
        // Now, we can return to fibBruteForce(4) which is fibBruteForce(3) + fibBruteForce(2).
        // or 1 + 1 = 2.
        // fibBruteForce(5) = fibBruteForce(4) + fibBruteForce(3) = 2 + 1 = 3
        return fibBruteForce($n - 1) + fibBruteForce($n - 2);
    }
}

$n = 5;
$result = fibBruteForce($n);
echo "The $n-th Fibonacci number is: $result";
