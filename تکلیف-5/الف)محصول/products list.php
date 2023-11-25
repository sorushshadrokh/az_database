<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// 1.create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//2.query
$sql = "SELECT NAME,price
FROM product;";
$result = $conn->query($sql);


$result = mysqli_query($conn, $sql);

$table = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($table);


//3.close conection
mysqli_close($conn);
