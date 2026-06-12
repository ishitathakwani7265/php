/* 1.1 Write a PHP program for print Previous semester Result using variables & constants in PHP. */
<?php

define("COLLEGE_NAME", "ABC College");

$studentName = "Rahul";
$semester = "Semester 3";
$percentage = 78.50;

echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Result: " . $percentage . "%";
?>