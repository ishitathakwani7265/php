<?php

$name = isset($_POST['name']) ? trim($_POST['name']) : "";
$email = isset($_POST['email']) ? trim($_POST['email']) : "";

$response = "";

if (empty($name))
{
    $response .= "Name is required.<br>";
}
else if (!preg_match("/^[a-zA-Z-' ]*$/", $name))
{
    $response .= "Only letters and white space are allowed in the name.<br>";
}

if (empty($email))
{
    $response .= "Email is required.<br>";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $response .= "Invalid email format.<br>";
}

if (empty($response))
{
    $response = "Validation Successful!";
}

echo $response;

?>