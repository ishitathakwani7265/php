/* 1.4 Write a PHP program to print current month using if..else & switch case. */
<?php

$month = date("F");

if ($month == "January") {
    echo "Current Month is January<br>";
} else {
    echo "Current Month is " . $month . "<br>";
}

switch ($month) {
    case "January":
        echo "Month Number = 1";
        break;
    case "February":
        echo "Month Number = 2";
        break;
    case "March":
        echo "Month Number = 3";
        break;
    case "April":
        echo "Month Number = 4";
        break;
    case "May":
        echo "Month Number = 5";
        break;
    case "June":
        echo "Month Number = 6";
        break;
    case "July":
        echo "Month Number = 7";
        break;
    case "August":
        echo "Month Number = 8";
        break;
    case "September":
        echo "Month Number = 9";
        break;
    case "October":
        echo "Month Number = 10";
        break;
    case "November":
        echo "Month Number = 11";
        break;
    case "December":
        echo "Month Number = 12";
        break;
}
?>