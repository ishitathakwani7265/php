<?php
// Inserts product data into the database.

header("Content-Type: application/json");


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

    echo json_encode([
        "success" => false,
        "message" => "Connection failed: " . mysqli_connect_error()
    ]);

    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nm = $_POST["nm"] ?? "";
    $price = $_POST["price"] ?? "";
    $qty = $_POST["qty"] ?? "";


    /* Check if all fields are filled */

    if ($nm === "" || $price === "" || $qty === "") {

        echo json_encode([
            "success" => false,
            "message" => "All fields are required."
        ]);

        mysqli_close($conn);

        exit;
    }


    /* Insert data using prepared statement */

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO product (name, price, qty)
         VALUES (?, ?, ?)"
    );


    if (!$stmt) {

        echo json_encode([
            "success" => false,
            "message" => "Prepare failed: " . mysqli_error($conn)
        ]);

        mysqli_close($conn);

        exit;
    }


    mysqli_stmt_bind_param(
        $stmt,
        "sdi",
        $nm,
        $price,
        $qty
    );


    if (mysqli_stmt_execute($stmt)) {

        echo json_encode([
            "success" => true,
            "message" => "Product added successfully."
        ]);

    } else {

        echo json_encode([
            "success" => false,
            "message" => "Error: " . mysqli_stmt_error($stmt)
        ]);

    }


    mysqli_stmt_close($stmt);


} else {

    echo json_encode([
        "success" => false,
        "message" => "Invalid request method."
    ]);

}


mysqli_close($conn);

?>