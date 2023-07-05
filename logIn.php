<?php
$connection = new mysqli("localhost", "root", "", "ajaxproject");

$email = $_POST['p1'];
$password = $_POST['p2'];

// Query to compare the input data with the database
$query = "SELECT COUNT(*) AS count FROM usercredentials WHERE userEmail = '$email' AND userPassword = '$password'";
$result = $connection->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $count = $row['count'];

    if ($count > 0) {
        // Data matches, send success response
        echo "success";
    } else {
        // Data does not match, send failure response
        echo "Data does not match. Please try again.";
    }
} else {
    // Error in executing the query
    echo "Error executing query.";
}

$connection->close();
?>