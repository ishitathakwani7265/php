<?php

$text = "hello world, hello all";
$find = "hello";
if (strpos($text, $find)!==false){
	echo "found!";
}
else{
	echo "Not found!";
}
echo "<br/>";
?>