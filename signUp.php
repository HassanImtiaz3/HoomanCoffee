<?php
$userFname = $_POST['p1'];
$userLname = $_POST['p2'];
$userEmail = $_POST['p3'];
$userPassword = $_POST['p4'];

$connection = new mysqli("localhost", "root", "", "ajaxproject");
$sql = "INSERT INTO usercredentials (userFname,userLname,userEmail,userPassword) VALUES ('$userFname', '$userLname', '$userEmail', '$userPassword')";

if ($connection->query($sql) === true) {
    echo "Data stored successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>