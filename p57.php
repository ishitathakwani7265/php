<!DOCTYPE html>
<html>
<head>
<title>Feedback Form</title>
</head>
<body>

<h2>Feedback Form</h2>

<form method="post">

Username:<br>
<input type="text" name="username"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

Feedback Message:<br>
<textarea name="feedback" rows="5" cols="30"></textarea><br><br>

<input type="submit" name="submit" value="Submit">

</form>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="my_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed");
}

if(isset($_POST['submit']))
{
    $user=$_POST['username'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $sql="INSERT INTO feedback(username,email,feedback_message)
    VALUES('$user','$email','$feedback')";

    if(mysqli_query($conn,$sql))
    {
        echo "<h3>Feedback Submitted Successfully!</h3>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}

mysqli_close($conn);

?>

</body>
</html>