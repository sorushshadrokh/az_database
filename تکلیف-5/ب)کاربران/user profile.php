<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 1.create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a = 1;
//2.query
$sql = "SELECT * FROM users
WHERE `deleted` = FALSE AND user_id = $a ;";
$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $table = $result->fetch_assoc();
    echo json_encode($table);
}
else{
    echo "پیدا نشد";
}

//3.close conection
mysqli_close($conn);
?>