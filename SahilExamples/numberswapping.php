<?php
// Initialize two variables with values
$number1 = 10;
$number2 = 20;

echo "Before swapping:\n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";

// Swap the numbers
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "After swapping:\n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";
?>

