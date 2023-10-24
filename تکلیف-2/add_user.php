<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 1.create connection
$conn = mysqli_connect($servername, $username , $password , $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

//2.query
$sql = "INSERT INTO users(user_name) VALUES('hasan');";
$result = mysqli_query($conn , $sql);

//3.close conection
mysqli_close($conn);

?>