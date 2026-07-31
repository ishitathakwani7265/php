<?php
// Dummy list of existing usernames
$existingUsers = ['admin', 'Ishita', 'testuser'];

if (isset($_GET['username'])) {
    $username = trim($_GET['username']);

    if (strlen($username) < 8) {
        echo 'Username must be at least 8 characters.';
    } elseif (in_array($username, $existingUsers)) {
        echo 'Username is already taken.';
    } else {
        echo 'Username is ok!';
    }
}
?>