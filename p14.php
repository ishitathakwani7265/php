/* 1.6 Write a PHP program to print 15 to 20 using While and Do While. */
<?php

echo "Using While Loop:<br>";

$i = 15;

while ($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<br><br>Using Do While Loop:<br>";

$j = 15;

do {
    echo $j . " ";
    $j++;
} while ($j <= 20);
?>