<?php
/*2.1 Write a PHP code to create numeric array for Monday to Saturday,
associative array for month with total days of month such as
January=>30,February=>28 upto December and multidimensional array
for laptop along with company name inside that model and price(any
two companies)*/
$month = date("n"); // n = numeric month without leading zero
echo "<h2>Current Month using if..else</h2>";
if ($month == 1)
    echo "January";
elseif ($month == 2)
    echo "February";
elseif ($month == 3)
    echo "March";
elseif ($month == 4)
    echo "April";
elseif ($month == 5)
    echo "May";
elseif ($month == 6)
    echo "June";
elseif ($month == 7)
    echo "July";
elseif ($month == 8)
    echo "August";
elseif ($month == 9)
    echo "September";
elseif ($month == 10)
    echo "October";
elseif ($month == 11)
    echo "November";
else
    echo "December";
echo "<h2>Current Month using switch case</h2>";
switch ($month) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    case 8: echo "August"; break;
    case 9: echo "September"; break;
    case 10: echo "October"; break;
    case 11: echo "November"; break;
    case 12: echo "December"; break;
    default: echo "Invalid Month";
}
?>