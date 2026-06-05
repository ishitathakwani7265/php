<?php
define("UNIVERSITY", "Marwadi University");
define("PASSING_MARKS", 35);

$studentName = "ABC";
$enrollmentNo = "MU12345";
$semester = "Semester 3";

$subject1 = 78;
$subject2 = 65;
$subject3 = 55;
$subject4 = 80;
$subject5 = 72;

$totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

$percentage = $totalMarks / 5;

echo "<h2>" . UNIVERSITY . "</h2>";
echo "<h3>Previous Semester Results</h3>";

echo "Student Name: $studentName <br>";
echo "Enrollment No: $enrollmentNo <br>";
echo "Semester: $semester <br><br>";

echo "Marks Obtained:<br>";
echo "Subject 1: $subject1 <br>";
echo "Subject 2: $subject2 <br>";
echo "Subject 3: $subject3 <br>";
echo "Subject 4: $subject4 <br>";
echo "Subject 5: $subject5 <br><br>";

echo "Total Marks: $totalMarks <br>";
echo "Percentage: $percentage% <br>";

if (
    $subject1 >= PASSING_MARKS &&
    $subject2 >= PASSING_MARKS &&
    $subject3 >= PASSING_MARKS &&
    $subject4 >= PASSING_MARKS &&
    $subject5 >= PASSING_MARKS
) {
    echo "<b>Status: PASS</b>";
} else {
    echo "<b>Status: FAIL</b>";
}
?>