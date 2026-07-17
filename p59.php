<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'my_db';


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$fid=$_GET['id'];

echo $fid;

$sql = "delete from feedback where fid='$fid'";

echo $sql;
if (mysqli_query($conn, $sql)) {
  header("Location:feedback.php");
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>