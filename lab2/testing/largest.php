<?php
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}


if (count($argv) != 4) {
    echo "Please provide three numbers as command-line arguments.\n";
    exit(1);
}


$num1 = intval($argv[1]);
$num2 = intval($argv[2]);
$num3 = intval($argv[3]);


$largest = findLargest($num1, $num2, $num3);


echo "The largest number is: " . $largest . "\n";
?>
