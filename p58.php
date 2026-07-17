<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Project</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
  }

  header {
    background-color: #333;
    padding: 15px 30px;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 20px;
  }

  nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }

  nav a:hover {
    text-decoration: underline;
  }

  .content {
    max-width: 700px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
  }

  h1 {
    color: #333;
  }

  p {
    font-size: 16px;
    line-height: 1.6;
  }

  footer {
    text-align: center;
    padding: 15px;
    background-color: #eee;
    margin-top: 40px;
  }
</style>
</head>
<body>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="register.html">Register</a></li>
    </ul>
  </nav>
</header>

<div class="content">
<html>
<body>
<table border=2 align=center>
<tr>
<th>ID</th>
<th>firstname</th>
<th>email</th>
<th>feedback</th>
<th>Edit</th>
<th>Delete</th>
</tr>
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

$sql = "select fid,firstname,email,feedback from feedback";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row["fid"];"</td>";
        echo"<td>".$row["firstname"];"</td>";
        echo" <td>".$row["email"];"</td>";
        echo" <td>".$row["feedback"];"</td>";
		echo" <td><a href='edit.php'>Edit</td>";
        echo" <td><a href='delete.php?id=".$row['fid']."'>Delete</td>";
		echo"</tr>";
	}
}
?>
</table>
</body>
</html  
</div>

<footer>
  <p>&copy; 2026 My Project. All rights reserved.</p>
</footer>

</body>
</html>