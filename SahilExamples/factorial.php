<?php
// Function to calculate the factorial of a number using a loop
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$n = 5; // Change the value of n to calculate the factorial of a different number

$result = factorial($n);
echo "Factorial of $n is: $result";
?>

