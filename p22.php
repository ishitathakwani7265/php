<?php
//wap to pass any number to function and then increment number by 10 inside function using call by reference.

function adder(&$str2)
{
	$str2+=10;
}
$str1=90;
adder($str1);
echo $str1;

?>