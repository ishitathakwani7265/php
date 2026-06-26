<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:p38.php");
    exit();
}
?>

<html>
<body>

<h2>Welcome <?php echo $_SESSION["username"]; ?></h2>

<p>This is the Home Page.</p>

<a href="p40.php">Logout</a>

</body>
</html>