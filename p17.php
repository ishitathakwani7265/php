/* WAP to find number is prime or not using PHP */
<?php

$num = 13;
$flag = 1;

if ($num <= 1) {
    $flag = 0;
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = 0;
            break;
        }
    }
}

if ($flag == 1) {
    echo "$num is Prime Number";
} else {
    echo "$num is Not Prime Number";
}
?>