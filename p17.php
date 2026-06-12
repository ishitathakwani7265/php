/* WAP to find number is prime or not using PHP */
<?php

$num = 7;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $count++;
    }
}

if ($count == 2) {
    echo "$num is Prime Number";
} else {
    echo "$num is Not Prime Number";
}
?>