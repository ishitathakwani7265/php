<?php
// 1.9 Write a PHP Program to reverse an array values entered by user.

$arr = array("Apple", "Banana", "Mango", "Orange");

$rev = array_reverse($arr);

foreach ($rev as $value) {
    echo $value . "<br>";
}
?>