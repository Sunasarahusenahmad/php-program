<?php
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 25;
$fibonacciSeries = generateFibonacci($n);

echo "The first $n numbers in the Fibonacci series are:<br>";
foreach ($fibonacciSeries as $number) {
    echo $number . ", ";
}
?>
