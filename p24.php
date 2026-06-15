<?php
$stud=array("rohan"=>101,"riya"=>102,"milan"=>103);

//echo $stud["riya"]."<br/>";

foreach($stud as $key=>$value)
{
	echo"name is: ".$key." and rollno is: ".$value."<br/>";
}
?>