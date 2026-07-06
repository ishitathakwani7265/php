<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM student";
// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Process the result set
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
?>
<html>
<body>

<table border=2>
<tr>
<th>Userid</th>
<th>Username</th>
<th>lastname</th>
</tr>
<tr>
<?php
  while($row = mysqli_fetch_assoc($result)) {

?>
		<td><?php echo $row["id"] ?></td>
		<td><?php echo $row["firstname"] ?></td>
		<td><?php echo $row["lastname"] ?></td>
		</tr>
<?php

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</table>
</html>