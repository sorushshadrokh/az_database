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
$sql1 = "ALTER TABLE product ADD deleted BOOLEAN NOT NULL DEFAULT FALSE AFTER attributes;";

$sql2 = "UPDATE product
SET deleted = true 
WHERE product_id = 1;";

$result = mysqli_query($conn , $sql1);
$result = mysqli_query($conn , $sql2);


//3.close conection
mysqli_close($conn);

?>