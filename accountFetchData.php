<?php
$fetchConnection = new mysqli("localhost", "root", "", "ajaxcoffee") or die("connection failed");

$sql = "SELECT * FROM coffeedata";
$result1 = mysqli_query($fetchConnection, $sql);

$sql = "SELECT * FROM teaData";
$result2 = mysqli_query($fetchConnection, $sql);

$sql = "SELECT * FROM organicData";
$result3 = mysqli_query($fetchConnection, $sql);

$sql = "SELECT * FROM moccaData";
$result4 = mysqli_query($fetchConnection, $sql);

$sql = "SELECT * FROM espressoData";
$result5 = mysqli_query($fetchConnection, $sql);

$sql = "SELECT * FROM americanoData";
$result6 = mysqli_query($fetchConnection, $sql);

$totalAmount=0;


$output = "";
if (
  mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0 ||
  mysqli_num_rows($result3) > 0 || mysqli_num_rows($result4) > 0 ||
  mysqli_num_rows($result5) > 0 || mysqli_num_rows($result6) > 0
) {
  $output = '
    <table class="table">
        <tr align="center">
            <th>Table Number</th>
            <th>Menu Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Amount</th>
        </tr>';
  while ($row = mysqli_fetch_assoc($result1)) {
    $output .= '
          <tr align="center" >
              <td>' . $row["tableNumber"] . '</td>
              <td>' . $row["itemName"] . '</td>
              
              <td>' . $row["itemPrice"] . '</td>
              <td>' . $row["itemQty"] . '</td>
              <td>' . $row["itemTotal"] . '</td>
          </tr>';
        $totalAmount +=$row['itemTotal'];
  }


  while ($row = mysqli_fetch_assoc($result2)) {
    $output .= '
    <tr align="center" >
    <td>' . $row["tableNumber"] . '</td>
            <td>' . $row["itemName"] . '</td>
            <td>' . $row["itemPrice"] . '</td>
            <td>' . $row["itemQty"] . '</td>
            <td>' . $row["itemTotal"] . '</td>
        </tr>';
        $totalAmount +=$row['itemTotal'];
  }

  while ($row = mysqli_fetch_assoc($result3)) {
    $output .= '
    <tr align="center" >
    <td>' . $row["tableNumber"] . '</td>
            <td>' . $row["itemName"] . '</td>
            <td>' . $row["itemPrice"] . '</td>
            <td>' . $row["itemQty"] . '</td>
            <td>' . $row["itemTotal"] . '</td>
        </tr>';
        $totalAmount +=$row['itemTotal'];
  }

  while ($row = mysqli_fetch_assoc($result4)) {
    $output .= '
    <tr align="center" >
    <td>' . $row["tableNumber"] . '</td>
          <td>' . $row["itemName"] . '</td>
          <td>' . $row["itemPrice"] . '</td>
          <td>' . $row["itemQty"] . '</td>
          <td>' . $row["itemTotal"] . '</td>
      </tr>';
      $totalAmount +=$row['itemTotal'];
  }

  while ($row = mysqli_fetch_assoc($result5)) {
    $output .= '
    <tr align="center" >
    <td>' . $row["tableNumber"] . '</td>
        <td>' . $row["itemName"] . '</td>
        <td>' . $row["itemPrice"] . '</td>
        <td>' . $row["itemQty"] . '</td>
        <td>' . $row["itemTotal"] . '</td>
    </tr>';
    $totalAmount +=$row['itemTotal'];
  }


  while ($row = mysqli_fetch_assoc($result6)) {
    $output .= '
    <tr align="center" >
    <td>' . $row["tableNumber"] . '</td>
      <td>' . $row["itemName"] . '</td>
      <td>' . $row["itemPrice"] . '</td>
      <td>' . $row["itemQty"] . '</td>
      <td>' . $row["itemTotal"] . '</td>
  </tr>';
  $totalAmount +=$row['itemTotal'];
  }
  $output .= '</table>';

  $output .= '<p>Total Amount: <span id="totalAmount">PKR: ' .$totalAmount.  '.00</span></p>';

  mysqli_close($fetchConnection);

  echo $output;
} else {
  echo "No data found.";
}
