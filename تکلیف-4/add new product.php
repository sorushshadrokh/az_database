<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// 1.create connection
$conn = mysqli_connect($servername, $username , $password , $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

//2.query
$sql = "INSERT INTO `product`(`name`, `brand`, `Purchase_price`, `Quantity_in_stock`, `Category`, `price`)
 VALUES ('refrigerator Snova model 3551','snowa',40000000,20,'refrigerator',42000000)";
$result = mysqli_query($conn , $sql);

//3.close conection
mysqli_close($conn);

?>