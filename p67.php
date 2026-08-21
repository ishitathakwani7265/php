<?php

// p68.php
// Displays product records from the database.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";


$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);


if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


$sql = "SELECT id, name, price, qty 
        FROM product 
        ORDER BY id DESC";


$result = mysqli_query($conn, $sql);


if ($result && mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>" .
             htmlspecialchars($row["id"]) .
             "</td>";

        echo "<td>" .
             htmlspecialchars($row["name"]) .
             "</td>";

        echo "<td>" .
             htmlspecialchars($row["price"]) .
             "</td>";

        echo "<td>" .
             htmlspecialchars($row["qty"]) .
             "</td>";

        echo "<td>
                <a href='edit.php?id=" .
                urlencode($row["id"]) .
                "'>Edit</a>
              </td>";

        echo "<td>
                <a href='delete_pro.php?id=" .
                urlencode($row["id"]) .
                "'>Delete</a>
              </td>";

        echo "</tr>";

    }

} else {

    echo "<tr>
            <td colspan='6'>No products found.</td>
          </tr>";

}


mysqli_close($conn);

?>