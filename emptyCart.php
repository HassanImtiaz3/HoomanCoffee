<?php


$connection = new mysqli("localhost", "root", "", "ajaxcoffee") or die("connection failed");


$query = "DELETE FROM americanodata";
$result = mysqli_query($connection, $query);
$query = "DELETE FROM coffeedata";
$result = mysqli_query($connection, $query);
$query = "DELETE FROM espressodata";
$result = mysqli_query($connection, $query);
$query = "DELETE FROM moccadata";
$result = mysqli_query($connection, $query);
$query = "DELETE FROM organicdata";
$result = mysqli_query($connection, $query);
$query = "DELETE FROM teadata";
$result = mysqli_query($connection, $query);

// Check if the deletion was successful
if ($result) {
  echo 'All data deleted successfully.';
} else {
  echo 'Error deleting data: ' . mysqli_error($connection);
}
?>
