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
$sql = "UPDATE product
SET name = 'refrigerator snowa model 100' , Purchase_price = 41000000 , Quantity_in_stock = 15
WHERE product_id = 1;";

$result = mysqli_query($conn , $sql);

//3.close conection
mysqli_close($conn);

?>