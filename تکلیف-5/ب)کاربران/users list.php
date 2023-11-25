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


//2.query
$sql = "SELECT user_name,CONCAT(first_name,' ',last_name)AS full_name, email, mobile_phone FROM users
WHERE `deleted` = FALSE;";
$result = $conn->query($sql);


$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $table = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($table);
}
else{
    echo "پیدا نشد";
}



//3.close conection
mysqli_close($conn);
?>