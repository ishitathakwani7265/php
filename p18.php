/* WAP to check given number is palindrome or not using PHP */
<?php

$num = 121;
$temp = $num;
$rev = 0;

while ($num > 0) {
    $rem = $num % 10;
    $rev = ($rev * 10) + $rem;
    $num = (int)($num / 10);
}

if ($temp == $rev) {
    echo "$temp is Palindrome Number";
} else {
    echo "$temp is Not Palindrome Number";
}
?>