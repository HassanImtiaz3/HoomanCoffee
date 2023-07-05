<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tableNumber = $_POST["tbl"];

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];

    $pp1 = $_POST["pp1"];
    $pp2 = $_POST["pp2"];
    $pp3 = $_POST["pp3"];
    $pp4 = $_POST["pp4"];
    $pp5 = $_POST["pp5"];
    $pp6 = $_POST["pp6"];

    $cc1 = $_POST["cc1"];
    $cc2 = $_POST["cc2"];
    $cc3 = $_POST["cc3"];
    $cc4 = $_POST["cc4"];
    $cc5 = $_POST["cc5"];
    $cc6 = $_POST["cc6"];

    $tt1 = $_POST["tt1"];
    $tt2 = $_POST["tt2"];
    $tt3 = $_POST["tt3"];
    $tt4 = $_POST["tt4"];
    $tt5 = $_POST["tt5"];
    $tt6 = $_POST["tt6"];

    $sentConnection = new mysqli("localhost", "root", "", "ajaxcoffee") or die("Connection Failed");

    if ($cc1 > 0) {
        $sql = "INSERT INTO coffeedata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n1', '$pp1', '$cc1', '$tt1')";
        $result = mysqli_query($sentConnection, $sql);
    }
    if ($cc2 > 0) {
        $sql = "INSERT INTO teadata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n2', '$pp2', '$cc2', '$tt2')";
        $result = mysqli_query($sentConnection, $sql);
    }
    if ($cc3 > 0) {
        $sql = "INSERT INTO organicdata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n3', '$pp3', '$cc3', '$tt3')";
        $result = mysqli_query($sentConnection, $sql);
    }
    if ($cc4 > 0) {
        $sql = "INSERT INTO moccadata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n4', '$pp4', '$cc4', '$tt4')";
        $result = mysqli_query($sentConnection, $sql);
    }
    if ($cc5 > 0) {
        $sql = "INSERT INTO espressodata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n5', '$pp5', '$cc5', '$tt5')";
        $result = mysqli_query($sentConnection, $sql);
    }
    if ($cc6 > 0) {
        $sql = "INSERT INTO americanodata (tableNumber, itemName, itemPrice, itemQty, itemTotal) VALUES ('$tableNumber', '$n6', '$pp6', '$cc6', '$tt6')";
        $result = mysqli_query($sentConnection, $sql);
    }

    if ($result) {
        // Redirect to a success page
        header("Location: index.php");
        exit();
    } else {
        echo "Error inserting data: " . mysqli_error($sentConnection);
        exit;
    }

  ///  mysqli_close($sentConnection);
}
?>
