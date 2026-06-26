<?php
session_start();
?>

<html>
<body>
<?php
	echo "user is ".$_SESSION["username"];
?>

<a href="p40.php">logout</a>
</body>
</html>