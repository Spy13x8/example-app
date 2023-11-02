<?php
class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!\n";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $fib = array();

        if ($n > 0) {
            $fib[0] = 0;
            if ($n > 1) {
                $fib[1] = 1;
                for ($i = 2; $i < $n; $i++) {
                    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                }
            }
        }

        return $fib;
    }
}

// Example usage
Practical::printHello();
$result = Practical::add(5, 3);
echo "Sum: $result\n";
$fibonacciSequence = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";
?>

