<?php
// Function to generate a Fibonacci sequence using a loop
function generateFibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

$n = 10; // Change the value of n to generate a different number of Fibonacci numbers

$fibonacciSequence = generateFibonacci($n);
echo "Fibonacci sequence for the first $n numbers: " . implode(", ", $fibonacciSequence);
?>

