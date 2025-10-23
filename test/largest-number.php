<?php
$num1 = 12;
$num2 = 445;
$num3 = 8;
$num4 = 32;
$num5 = 2744;

$largest = $num1; // Assume first number is largest initially

if ($num2 > $largest) {
    $largest = $num2;
}
if ($num3 > $largest) {
    $largest = $num3;
}
if ($num4 > $largest) {
    $largest = $num4;
}
if ($num5 > $largest) {
    $largest = $num5;
}

echo "The largest number is: " . $largest;
?>
